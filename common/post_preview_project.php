<div class="post_preview">
  <div class="left">
    <button name="button"><img src="/img/arrow_up.png" alt="up"> </button>
    <h2><?= $post["project_index"] ?></h2>
    <button name="button"><img src="/img/arrow_down.png" alt="down"> </button>
  </div>
  <div class="right">
    <a href="/common/post_editor.php/?id=<?=$post["id"]?>">
      <h2><?= $post["title"] ?></h2>
      <h3><?= $post["date"] ?></h3>
    </a>
  </div>
</div>
