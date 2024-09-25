 <!-- Recent Blog Posts Section -->
 <section id="blog" class="recent-blog-posts section light-background">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
     <?php include "../actions/blog/show_title.php" ?>
     <h2><?= $blog_title->judul ?></h2>
     <p><?= $blog_title->sub_judul ?></p>
   </div><!-- End Section Title -->

   <div class="container">

     <div class="row gy-5">

       <?php include "../actions/blog/showAll.php";
        while ($item = $result->fetch_object()) : ?>

         <div class="col-xl-4 col-md-6">
           <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

             <div class="post-img position-relative overflow-hidden">
               <img src="../../storages/images/blog/<?= $item->foto ?>" class="img-fluid" alt="">
               <span class="post-date"><?= $item->date ?></span>
             </div>

             <div class="post-content d-flex flex-column">

               <a href="">
                 <h3 class="post-title"><?= $item->judul ?></h3>
               </a>

               <div class="meta d-flex align-items-center d-block">
                 <div class="d-flex align-items-center">
                   <i class="bi bi-person"></i> <span class="ps-2"><?= $item->penulis ?></span>
                 </div>
                 <span class="px-3 text-black-50">/</span>
                 <div class="d-flex align-items-center">
                   <i class="bi bi-folder2"></i> <span class="ps-2"><?= $item->sumber ?></span>
                 </div>
               </div>

               <hr>
             </div>

           </div>
         </div><!-- End post item -->

       <?php endwhile; ?>
       <a href="../site/blog.php" class="no blue-line text-center mt-5" data-aos="fade-up" data-aos-delay="100">Lihat Selengkapnya...</a>
     </div>

   </div>

 </section><!-- /Recent Blog Posts Section -->

 </main>