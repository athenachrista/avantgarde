<?php echo head(array('title' => metadata( 'collection', array('Dublin Core', 'Title')),'bodyclass' => 'collections show')); ?>
<div id="primary">
    <h1><?php echo metadata( 'collection', array('Dublin Core','Title')); ?></h1>

    <!-- Items metadata -->
    <div id="description">
        <?php 
        echo metadata( 'collection', array('Dublin Core', 'Description'))
        // echo all_element_texts( 'collection'); 
        ?>
    </div>

    <div id="elements">
        <?php 

        $elements = array('Subject', 'Creator', 'Source');

        foreach ($elements as $element) {
          $contents = metadata( 'collection', array('Dublin Core', $element));
          if (!empty($contents)) {
            echo $element.': '.$contents.'<br>';
          };
        };

        ?>
    </div>

    <h3><?php echo __('Files'); ?></h3>
    <div id="item-images">
    </div>



     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata( 'collection','has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string( 'collection'); ?></div>
    </div>
    <?php endif;?>

 
       <?php fire_plugin_hook('public_items_show', array('view' => $this,  'collection' => $collection)); ?>



</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
