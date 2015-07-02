
<?php
require_once 'EventType.php';
foreach ( $feed as $entry ) :
$eventType = new EventType( $entry );
?>
<div>
	<time datetime="<?php echo $entry->created_at ?>"></time>
	<a class="github-feed-actor" target="_blank" href="http://github.com/<?php echo $eventType->getActor() ?>" 
	   title="View profile" style="font-weight: bold; margin-right: 3px;">
		<?php echo $eventType->getActor() ?>
	</a>
	<span class="github-feed-action" style="margin-right: 3px;">
		<?php echo $eventType->getAction() ?>
	</span>
	<span class="github-feed-object" style="font-weight: bold; margin-right: 3px;">
		<?php echo $eventType->getPayload() ?>
	</span>
</div>

<?php
endforeach;
