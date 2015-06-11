<?php echo head(array('title' => metadata( 'collection', array('Dublin Core', 'Title')),'bodyclass' => 'collections show')); ?>
<div id="primary">
    <h1><?php echo metadata( 'collection', array('Dublin Core','Title')); ?></h1>

    <!-- Items metadata -->
    <div id="description">
        <?php 
        echo metadata( 'collection', array('Dublin Core', 'Description'))
        ?>
    </div>

    <!-- metadata element sidebar -->
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


</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
