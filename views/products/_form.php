<?php
    if(!empty($errors)):
    ?>
    <div class="alert alert-danger">
        <?php
        foreach($errors as $error):
        ?>
        <div><?php
        echo $error
        ?></div>
        <?php
        endforeach;
        ?>
    </div>
    <?php
    endif;
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
    <?php
    if($product['image']):
    ?>
    <img class="update-image"  src="/<?php
    echo $product['image'];
    ?>" alt="" >
    <?php
    endif;

    ?>
    <div class="mb-3">
    <label>Product Image</label>
    <input name="image" type="file" class="form-control"  >
  </div>
  <div class="mb-3">
    <label>Product Title</label>
    <input name = "title" type="text" class="form-control" value="<?php
    echo $product['title'];
    ?>" >
  </div>
  <div class="mb-3">
    <label>Product Description</label>
    <textarea name="description" type="text" class="form-control" ><?php
    echo $product['description'];
    ?> </textarea>
  </div>
  <div class="mb-3">
    <label>Product Price</label>
    <input name="price" type="number" step=".01" min="0" class="form-control"
    value="<?php
    echo $product['price'];
    ?>"  >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>