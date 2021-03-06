<!-- s:<?= __FILE__ ?> -->
<h2>
	Domain info &amp; setup
</h2>
<div id="wiki-factory-domains">
<?php
	if( !is_null( $info ) ):
		echo $info;
	endif;
?>

	<ul>
		<li>
			Domain in city_list is
			<strong>
				<a href="<?= $wiki->city_url ?>" target="_blank">
					<?php echo $wiki->city_url ?>
				</a>
			</strong>
		</li>
		<!-- s:enabling/disabling/redirecting/protecting -->
		<li>
			<form action="<?php echo $title->getFullUrl() ?>" method="post">
				<input type="hidden" name="wpAction" value="status" />
				Change Wikia status to:
				<select name="wpWikiStatus">
				<?php
					foreach ( $statuses as $key => $value):
				?>
					<option value="<?php echo $key ?>" <?php echo ( $key == $wiki->city_public ) ? 'selected="selected"' : "" ?> ><?php echo $value?></option>
				<?php
					endforeach;
				?>
				</select><br />
				<label for="wk-status-reason"><?= wfMessage( 'wikifactory-label-reason' )->parse(); ?></label>
				<input type="text" id="wk-status-reason" name="wpReason" value="" size="24" /><br />
				<input type="submit" name="wk-status-submit" value="Confirm change" />
			</form>
		</li>
		<li>
			<form action="<?php echo $title->getFullUrl() ?>" method="post">
				<input type="hidden" name="wpAction" value="protect" />
				<input type="checkbox" name="wpProtected" id="wp-protected" <?php echo $protected ? "checked" : "" ?> />
				<label for="wp-protected">Protect Site (never delete)</label><br />
				<label for="wk-protect-reason"><?= wfMessage( 'wikifactory-label-reason' )->parse(); ?></label>
				<input type="text" id="wk-protect-reason" name="wpReason" value="" size="24" /><br />
				<input type="submit" name="wk-protect-submit" value="Confirm change" />
			</form>
		</li>
		<!-- e:enabling/disabling/redirecting -->
			<!-- s:configuring domains -->
			<li>
				Wiki Factory is configured for handling domains:
				<ol id="wk-domain-ol">
					<?php
					foreach( $domains as $key => $domain): ?>
					<li id="wk-domain-li-<?= $key ?>"><?= $domain ?>
						<a id="wk-domain-li-<?= $key ?>change" href="#" title="<?php echo wfMsg('wikifactory-domain-edit'); ?>">[change]</a>&nbsp;
						<a id="wk-domain-li-<?= $key ?>remove" href="#" title="<?php echo wfMsg('wikifactory-domain-remove'); ?>">[remove]</a>&nbsp;
						<a id="wk-domain-li-<?= $key ?>setmain" href="#" title="<?php echo wfMsg('wikifactory-domain-setmain'); ?>">[set main]</a>
						<script type="text/javascript">
						/*<![CDATA[*/
							$Factory.Domain.listEvents("<?= $domain?>", <?= $key ?>);
						/*]]>*/
						</script>
					</li>
					<?php endforeach ?>
				</ol>
				<div>
					<label for="wk-domain-add"><?= wfMessage( 'wikifactory-label-domain' )->parse(); ?></label>
					<input type="text" size="24" maxlength="255" id="wk-domain-add" name="wk-domain-add" /><br />
					<label for="wk-domain-reason"><?= wfMessage( 'wikifactory-label-reason' )->parse(); ?></label>
					<input type="text" id="wk-domain-reason" name="wk-domain-reason" value="" size="24" /><br />
					<input type="button" id="wk-domain-add-submit" value="Add new domain" />
				</div>
			</li>
	</ul>
</div>
<!-- e:<?= __FILE__ ?> -->
