<div class="col">
    <div class="card" style="width: 15rem;">
    <img src=" <?php echo  "/../public/img/" . $image; ?>" class="card-img-top" alt="photoProduct">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $name; ?></h5>
        <p class="card-text"><?php echo $description; ?></p>
        <a href="<?php echo "products/about/?id=" . $id ?>" class="btn btn-primary">Go buy!</a>

    </div>
</div>
</div>

