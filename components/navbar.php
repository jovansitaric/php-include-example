<?php
    $list_data = [
        [
            'text' => 'item 1',
            'url'  => '#'
        ],
        [
            'text' => 'item 2',
            'url'  => '#'
        ],
        [
            'text' => 'item 3',
            'url'  => '#'
        ],
        [
            'text' => 'item 4',
            'url'  => '#'
        ],
        [
            'text' => 'item 5',
            'url'  => '#'
        ]
    ];
?>
<div class="m-nav">
    <ul class="m-list">
        <!-- At the moment, this $list_data array has 5 elements, we can se that through var dump. Uncomment to see it -->
        <?php 
            // echo '<pre>', var_dump($list_data), '</pre>'; 
        ?>
        <!-- Foreach: go through that array. Each itteration (currently 5 elemets), will be memorized into $item var -->
        <!-- When we go through all elements, foreach ends -->
        <?php foreach ($list_data as $item): ?>
            <li class="m-list__item"><a href="<?php echo $item['url'] ?>" class="m-list__item--link"><?php echo $item['text'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>