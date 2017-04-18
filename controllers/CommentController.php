<?php
/**
 *
 */
class CommentController
{

  public function actionCreate()
  {
    echo Comment::createComment($id);
    return true;
  }

  public function actionDel($id)
  {
    echo Comment::delComment($id);
    return true;
  }

}

?>
