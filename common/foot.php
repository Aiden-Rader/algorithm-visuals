<?php
	// common/foot.php
	$js = $page['js'] ?? [];
	$coderunner = $page['coderunner'] ?? false;
	$use_gsap = $page['use_gsap'] ?? false;
	$pkg = CODE_RUNNER_PKG;
	$crver = CODE_RUNNER_VERSION;
?>
</div><!-- /.wrapper from head.php -->
	<!-- Common helpers -->
	<script src="/common/scripts/common_scripts.js?v=<?= ASSET_VER ?>"></script>

	<!-- jQuery + Bootstrap bundle -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@<?= CDN_JQUERY_VER ?>/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@<?= CDN_BOOTSTRAP_VER ?>/dist/js/bootstrap.bundle.min.js"></script>

	<?php if ($use_gsap): ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
	<?php endif; ?>

	<?php if ($coderunner): ?>
		<script src="https://cdn.jsdelivr.net/npm/monaco-editor@<?= CDN_MONACO_VER ?>/min/vs/loader.js"></script>
		<script>require.config({ paths: { 'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@<?= CDN_MONACO_VER ?>/min/vs' } });</script>
		<script src="https://cdn.jsdelivr.net/npm/<?= $pkg ?>@<?= $crver ?>/dist/coderunner.umd.js"></script>
	<?php endif; ?>

	<?php foreach ($js as $src): ?>
		<script src="<?= htmlspecialchars($src) ?>?v=<?= ASSET_VER ?>" defer></script>
	<?php endforeach; ?>

	</body>
</html>
