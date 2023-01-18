<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary"  <?php echo e(routeActive('setting')); ?> href="<?php echo e(route('setting')); ?>"><i data-feather="settings"></i></a> <?php ($photo = auth()->user()->photo); ?>
        <img class="img-70 rounded-circle" width="150px" src="<?php if($photo == null): ?> https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg  <?php else: ?> <?php echo e(asset("storage/$photo")); ?> <?php endif; ?>" id="image_preview_container">
     
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600"><?php echo e(Auth()->user()->name); ?></h6></a>
        <p class="mb-0 font-roboto">Etudiant</p>
        <ul>
            <li>
                <span><span class="counter">classe</span></span>
                <p>  </p>
            </li>
            <li>
                <span>filiere</span>
                <p>Experince</p>
            
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Management</h6>
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/widgets')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/widgets')); ?>;">
                            <li><a href="<?php echo e(route('general-widget')); ?>" class="<?php echo e(routeActive('general-widget')); ?>">General</a></li>
                            <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">Chart</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(url('dashboard')); ?>" href="<?php echo e(url('dashboard')); ?>"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    

                  

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Composants</h6>
                        </div>

                    </li>

                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Classe')); ?>" href="javascript:void(0)"><i class="fa fa-building-o"> </i><span> Classe</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Classe')); ?>;">
                           <li><a href="<?php echo e(route('Classe.create')); ?>" class="<?php echo e(routeActive('Classe.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Classe.index')); ?>" class="<?php echo e(routeActive('Classe.index')); ?>">Voir</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(route('permission.index')); ?>" href="<?php echo e(route('permission.index')); ?>"><i data-feather="home"></i><span>Permission</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Prof')); ?>" href="javascript:void(0)"><i data-feather="user"></i><span>Professeur</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Prof')); ?>;">
                           <li><a href="<?php echo e(route('Prof.create')); ?>" class="<?php echo e(routeActive('Prof.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Prof.index')); ?>" class="<?php echo e(routeActive('Prof.index')); ?>">Voir</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/User')); ?>" href="javascript:void(0)"><i data-feather="user"></i><span>User</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/User')); ?>;">
                           <li><a href="<?php echo e(route('user.create')); ?>" class="<?php echo e(routeActive('user.create')); ?>">Ajouter</a></li>
                           <li><a href="<?php echo e(route('user.index')); ?>" class="<?php echo e(routeActive('user.index')); ?>">Voir</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Cour')); ?>" href="javascript:void(0)"><i class="fa fa-building-o"></i><span>Cours</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Cour')); ?>;">
                           <li><a href="<?php echo e(route('Cour.create')); ?>" class="<?php echo e(routeActive('Cour.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Cour.index')); ?>" class="<?php echo e(routeActive('Cour.index')); ?>">Voir</a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Filiere')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Filiere</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Filiere')); ?>;">
                           <li><a href="<?php echo e(route('Filiere.create')); ?>" class="<?php echo e(routeActive('Filiere.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Filiere.index')); ?>" class="<?php echo e(routeActive('Filiere.index')); ?>">Voir</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Etudiant')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Etudiant</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Etudiant')); ?>;">
                           <li><a href="<?php echo e(route('Etudiant.create')); ?>" class="<?php echo e(routeActive('Etudiant.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Etudiant.index')); ?>" class="<?php echo e(routeActive('Etudiant.index')); ?>">Voir</a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Salle')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Salle</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Salle')); ?>;">
                           <li><a href="<?php echo e(route('Salle.create')); ?>" class="<?php echo e(routeActive('Salle.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Salle.index')); ?>" class="<?php echo e(routeActive('Salle.index')); ?>">Voir</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Note')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Note</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Note')); ?>;">
                           <li><a href="<?php echo e(route('Note.create')); ?>" class="<?php echo e(routeActive('Note.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Note.index')); ?>" class="<?php echo e(routeActive('Note.index')); ?>">Voir</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Aff_eleve')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Affection d'eleves</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Aff_eleve')); ?>;">
                           <li><a href="<?php echo e(route('Aff_eleve.create')); ?>" class="<?php echo e(routeActive('Aff_eleve.create')); ?>">Ajouter</a></li>
                            <li><a href="<?php echo e(route('Aff_eleve.index')); ?>" class="<?php echo e(routeActive('Aff_eleve.index')); ?>">Voir</a></li>
                        </ul>
                    </li>



                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(url('/chatify')); ?>" href="<?php echo e(url('/chatify')); ?>"><i data-feather="send"></i><span>Message</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Evenement')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Evenement</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Evenement')); ?>;">
                           <li><a href="<?php echo e(route('acheter')); ?>" class="<?php echo e(routeActive('acheter')); ?>">Acheter</a></li> 
                            <li><a href="<?php echo e(route('produit.index')); ?>" class="<?php echo e(routeActive('produit.index')); ?>">Acheter un ticket</a></li>
                            <li><a href="<?php echo e(route('code')); ?>" class="<?php echo e(routeActive('code')); ?>">Reçu</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('produit.create')); ?>" href="<?php echo e(route('produit.create')); ?>"><i data-feather="home"></i><span>Ajouter un Evenement</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('Calendrier.index')); ?>" href="<?php echo e(route('Calendrier.index')); ?>"><i data-feather="home"></i><span>Calendrier</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('Stat.index')); ?>" href="<?php echo e(route('Stat.index')); ?>"><i data-feather="home"></i><span>Statisique Classe</span></a>
                    </li>
                   
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/Journal')); ?>" href="javascript:void(0)"><i data-feather="edit"></i><span>Journal</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/Journal')); ?>;">
                            <li><a href="<?php echo e(route('list')); ?>" class="<?php echo e(routeActive('list')); ?>">Journal</a></li>
                            
                            <li><a href="<?php echo e(route('add')); ?>" class="<?php echo e(routeActive('add')); ?>">Add Post</a></li>
                        </ul>
                    </li>


                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /Users/angek/Downloads/vihoadmin-10/vihoadmin-10/viho_html_laravel/Viho-Laravel-8/theme/resources/views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>