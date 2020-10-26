<main class="page-content" id="home">
    <div class="container">
        <h4>All posts</h4>
        <div class="row">
            <?php
foreach($posts as $post): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="<?php echo url('post/'.$post['slug']); ?>">
                    <div class="card">
                        <img src="<?php echo asset('storage/images/article_featured/'.$post['featured_image']); ?>" class="card-img-top">
                        <div class="card-body">
                            <h4><?php echo $post['title']; ?></h4>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>