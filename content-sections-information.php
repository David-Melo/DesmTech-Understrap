<!-- ---------------------- Section Template ---------------------- -->
<?php if( get_row_layout() == 'information_section' ): ?>

    <div class="row" style="position: relative">

        <div class="col-lg-1"></div>

        <div class="col-sm-12 col-md-auto information-nav-wrapper" style="position: relative">

            <!-- Nav Loops -->

            <div class="information-nav">

                <div id="information-nav-collapse" role="tablist" aria-multiselectable="false">

                    <?php if( have_rows('information_category') ): ;?>

                        <?php while ( have_rows('information_category') ) : the_row(); ;?>

                            <? $topicId = get_row_index();?>

                            <?php if( get_row_layout() == 'information_topic' ): ;?>

                                <div class="card">

                                    <div class="card-header" role="tab" id="information-nav-collapse-heading-<?=$topicId;?>">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" class="<?=($topicId==1)?'':'collapsed';?>" data-parent="#information-nav-collapse" href="#information-nav-collapse-item-<?=$topicId;?>" aria-expanded="<?=($topicId==1)?'true':'false';?>" aria-controls="information-nav-collapse-item-<?=$topicId;?>">
                                                <?=get_sub_field('topic_name');?>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="information-nav-collapse-item-<?=$topicId;?>" class="collapse <?=($topicId==1)?'show':'';?>" role="tabpanel" aria-labelledby="information-nav-collapse-heading-<?=$topicId;?>">
                                        <div class="card-block">

                                            <?php if( have_rows('topic_items') ): ;?>

                                                <ol>

                                                    <?php while ( have_rows('topic_items') ) : the_row() ;?>

                                                        <? $itemId = get_row_index();?>
                                                        <? $itemSlug = str_replace(' ', '-', strtolower(get_sub_field('item_title'))); ?>

                                                        <li class="text-uppercase brand-thin"><a href="#<?=$itemSlug;?>"><?=get_sub_field('item_title');?></a></li>

                                                    <?php endwhile; ?>

                                                </ol>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                </div>

                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>

            <!-- Nav Loops -->

        </div>

        <div class="col-sm">

            <!-- Content Loops -->

            <style>
                .information-nav ol {
                    margin-bottom: 0;
                }
                .information-nav .card-header h5 a {
                    position: relative;
                    display: block;
                }
                .information-nav .card-header h5 a:after {
                    position: absolute;
                    right: 0;
                    font: normal normal normal 14px/1 FontAwesome;
                    font-size: inherit;
                    text-rendering: auto;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }
                .information-nav .card-header h5 a.collapsed:after {
                    content: "";
                }
                .information-nav .card-header h5 a:not(.collapsed):after {
                    content: "";
                }

                ol.information-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    counter-reset: item;
                    margin-left: 30px;
                }
                .information-list > li {
                    position: relative;
                    counter-increment: item;
                    margin-bottom: 40px;
                    margin-left: 40px;
                }
                .information-list > li > h2 {
                    text-transform: uppercase;
                }
                .information-list > li > p {
                    font-family: "Gotham Thin";
                }
                .information-list > li > h2:before {
                    content: counter(item)".";
                    display: block;
                    margin-left: -50px;
                    position: absolute;
                }
                @media (max-width: 735px) {
                    .information-nav {
                        margin-bottom: 30px;
                    }
                }
            </style>

            <?php if( have_rows('information_category') ): ;?>

                <?php while ( have_rows('information_category') ) : the_row(); ;?>

                    <? $topicId = get_row_index();?>
                    <? $topicSlug = str_replace(' ', '-', strtolower(get_sub_field('topic_name'))); ?>

                    <?php if( get_row_layout() == 'information_topic' ): ;?>

                        <a class="anchor" id="information-topic-<?=$topicId;?>"></a>
                        <div class="h2 brand-blue brand-medium text-uppercase"><?=get_sub_field('topic_name');?></div>

                        <hr>

                        <?php if( have_rows('topic_items') ): ;?>

                            <ol class="information-list">

                                <?php while ( have_rows('topic_items') ) : the_row() ;?>

                                    <? $itemId = get_row_index();?>
                                    <? $itemSlug = str_replace(' ', '-', strtolower(get_sub_field('item_title'))); ?>

                                    <li>
                                        <a class="anchor" id="<?=$itemSlug;?>"></a>
                                        <h2><?=get_sub_field('item_title');?></h2>
                                        <p><?=get_sub_field('item_body');?></p>

                                    </li>

                                <?php endwhile; ?>

                            </ol>

                        <?php endif; ?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <!-- Content Loops -->

        </div>

        <div class="col-lg-1"></div>

    </div>

<?php endif; ?>
<!-- ---------------------- Section Template ---------------------- -->