
<?php header('Cache-Control: no cache');?>

<div class="box-content">

<?php  $id_loja =  $_SESSION['id']; include('menu.php');  ?>



<style>
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: #f1f1f1;
  padding: 10px;
  flex: 50%;
}

.flex-item-right {
  background-color: #f1f1f1;
  padding: 10px;
  flex: 50%;
}

@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>

<div class="flex-container">
  <div class="flex-item-left"><iframe width="500" height="280" src="https://www.youtube.com/embed/qWZOeeico7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="flex-item-right"><iframe width="500" height="280" src="https://www.youtube.com/embed/qWZOeeico7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

  </div><!--flex-container-->
  <div class="flex-container">
  <div class="flex-item-left"><iframe width="500" height="280" src="https://www.youtube.com/embed/qWZOeeico7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="flex-item-right"><iframe width="500" height="280" src="https://www.youtube.com/embed/qWZOeeico7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>


</div><!--flex-container-->




</div><!--box-content-->


