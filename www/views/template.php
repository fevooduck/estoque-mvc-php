<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<?php if(isset($viewData['menu'])): ?>
		<header>
			<nav>
				<ul>
					<?php foreach($viewData['menu'] as $url => $menuTitle): ?>
						<li><a href="<?php echo $url; ?>"><?php echo $menuTitle; ?></a></li>
					<?php endforeach; ?>

				</ul>
			</nav>
		</header>
		<?php endif; ?>
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	</body>
</html>