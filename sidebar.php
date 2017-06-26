<div id="sidebar">
<h2 ><?php _e('Categories'); ?></h2>
<ul >
 <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
 <?php wp_get_archives('type=monthly'); ?>
</ul>

<nav>
                            
                            <h3 class="mt-3" onclick="alert('Fais toi plaisir !');">Suivez-nous sur :</h3>
                             <div class="list-group mt-1">
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i>
                                 </i>&nbsp; Facebook</a>
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                                </i>&nbsp; Twitter</a>
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-linkedin" aria-hidden="true"></i>
                                 </i>&nbsp; Linkedin</a>
                                <a class="list-group-item" href="#"><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i>
                                    </i>&nbsp; Google+</a>
                            </div>
                     </nav>
</div>