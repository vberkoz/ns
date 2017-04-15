<?php
/**
 *
 */
class Comment
{

  public static function getCommentsByProductId($id)
  {
    $id = intval($id);
    if ($id) {
      $db = Db::getConnection();

      $result = $db->query("SELECT
        ns_comments.id,
        ns_comments.comment_text,
        ns_comments.comment_date,
        ns_comments.user_id,
        ns_comments.product_id,
        ns_comments.reply_to_comment,
        ns_comments.reply_to_user,
        A.name AS from_user,
        B.name AS to_user
        FROM ns_comments, ns_users A, ns_users B
        WHERE ns_comments.user_id=A.id
        AND ns_comments.reply_to_user=B.id
        AND ns_comments.product_id=
        ".$id);

      $comments = array();
      $i = 0;
      while ($row = $result->fetch()) {
        $comments[$i]['id'] = $row['id'];
        $comments[$i]['comment_text'] = $row['comment_text'];
        $comments[$i]['comment_date'] = $row['comment_date'];
        $comments[$i]['user_id'] = $row['user_id'];
        $comments[$i]['product_id'] = $row['product_id'];
        $comments[$i]['reply_to_comment'] = $row['reply_to_comment'];
        $comments[$i]['reply_to_user'] = $row['reply_to_user'];
        $comments[$i]['from_user'] = $row['from_user'];
        $comments[$i]['to_user'] = $row['to_user'];
        $i++;
      }

      return $comments;
    }
  }

  public static function createComment($comment, $userId, $productId, $commentId, $toUser)
  {
    $db = Db::getConnection();
    $sql = 'INSERT INTO ns_comments (comment_text, user_id, product_id, reply_to_comment, reply_to_user)
      VALUES (:comment_text, :user_id, :product_id, :reply_to_comment, :reply_to_user)';
    $result = $db->prepare($sql);
    $result->bindParam(':comment_text', $comment, PDO::PARAM_STR);
    $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
    $result->bindParam(':product_id', $productId, PDO::PARAM_STR);
    $result->bindParam(':reply_to_comment', $commentId, PDO::PARAM_STR);
    $result->bindParam(':reply_to_user', $toUser, PDO::PARAM_STR);
    $result->execute();
    return $result;
  }

  public static function updateComment($comment, $commentId)
  {
    $db = Db::getConnection();
    $sql = 'UPDATE ns_comments SET comment_text = :comment_text WHERE id = :id';
    $result = $db->prepare($sql);
    $result->bindParam(':comment_text', $comment, PDO::PARAM_STR);
    $result->bindParam(':id', $commentId, PDO::PARAM_STR);
    $result->execute();
    return $result;
  }

}

?>
