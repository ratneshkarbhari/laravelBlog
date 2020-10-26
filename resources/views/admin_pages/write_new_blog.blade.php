<main class="page-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h4>Add New Blog</h4>
                <p class="text-success"><?php echo $success; ?></p>
                <p class="text-danger"><?php echo $error; ?></p>
                <form action="<?php echo url('add-new-blog-exe'); ?>" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="blog-title">Title</label>
                        <input class="form-control" type="text" name="blog-title" id="blog-title" required> 
                    </div>
                    <div class="form-group">
                        <label for="blog-slug">Slug</label>
                        <input class="form-control" type="text" name="blog-slug" id="blog-slug">
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                        <input  type="file" name="featured_image" id="featured_image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="post-body">Body</label>
                        <textarea class="form-control" name="post-body" id="post-body" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Publish</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
        </div>
    </div>
</main>