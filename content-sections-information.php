<!-- ---------------------- Section Template ---------------------- -->
<?php if( get_row_layout() == 'information_section' ): ?>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-1"></div>

        <div class="col-sm-auto">

            <!-- Nav Loops -->

            <div class="card card-outline-primary">

                <div class="card-block">

                    <?php if( have_rows('information_category') ): ;?>

                        <?php while ( have_rows('information_category') ) : the_row(); ;?>

                            <? $topicId = get_row_index();?>

                            <?php if( get_row_layout() == 'information_topic' ): ;?>

                                <div class="h4 text-uppercase brand-medium brand-blue"><a href="#information-topic-<?=$topicId;?>"><?=get_sub_field('topic_name');?></a></div>
                                <?php if( have_rows('topic_items') ): ;?>

                                    <ul>

                                        <?php while ( have_rows('topic_items') ) : the_row() ;?>

                                            <? $itemId = get_row_index();?>
                                            <li class="text-uppercase brand-thin"><a href="#information-topic-<?=$topicId;?>-item-<?=$itemId;?>"><?=get_sub_field('item_title');?></a></li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>

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
            </style>

            <?php if( have_rows('information_category') ): ;?>

                <?php while ( have_rows('information_category') ) : the_row(); ;?>

                    <? $topicId = get_row_index();?>

                    <?php if( get_row_layout() == 'information_topic' ): ;?>

                        <a class="anchor" id="information-topic-<?=$topicId;?>"></a>
                        <div class="h2 brand-blue brand-medium text-uppercase"><?=get_sub_field('topic_name');?></div>

                        <hr>

                        <?php if( have_rows('topic_items') ): ;?>

                            <ol class="information-list">

                                <?php while ( have_rows('topic_items') ) : the_row() ;?>

                                    <? $itemId = get_row_index();?>

                                    <li>
                                        <a class="anchor" id="information-topic-<?=$topicId;?>-item-<?=$itemId;?>"></a>
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

        <div class="col-md-1"></div>

    </div>

</div>


<?php endif; ?>
<!-- ---------------------- Section Template ---------------------- -->