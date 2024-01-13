<?
$artworks = $artworks ?? [];
?>
<ol class="artwork-list">
<? foreach($artworks as $artwork){ ?>
	<li <? if($artwork->Status == COVER_ARTWORK_STATUS_IN_USE){ ?> class="in-use"<? } ?>>
		<a href="<?= $artwork->Url ?>">
			<picture>
				<source srcset="<?= $artwork->Thumb2xUrl ?> 2x, <?= $artwork->ThumbUrl ?> 1x" type="image/jpg"/>
				<img src="<?= $artwork->ThumbUrl ?>" alt="" property="schema:image"/>
			</picture>
		</a>
	</li>
<? } ?>
</ol>