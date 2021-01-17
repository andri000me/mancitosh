<?php
$contactPerson = new \App\Models\ContactPerson();
?>

<footer class="footer mt-auto">
	<div class="container border-top py-3">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-5 col-xl-5">
				<h3>Mancitosh <small>v6</small></h3>
				<p class="lead"><?= config('Site')->description ?></p>
				<div class="pt-2 mb-5 mb-sm-0">
					<a href="https://man1ponorogo.sch.id/" class="lead text-success pr-3 py-2 d-block d-lg-inline text-decoration-none">MAN 1 Ponorogo</a>
					<!-- facebook -->
					<a href="https://web.facebook.com/man1ponorogoo/" class="text-dark px-3 px-lg-2 px-xl-4 py-2 d-block d-lg-inline text-decoration-none">
						<svg height="2.5rem" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="2.5rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-106.468,0l0,-192.915l66.6,0l12.672,-82.621l-79.272,0l0,-53.617c0,-22.603 11.073,-44.636 46.58,-44.636l36.042,0l0,-70.34c0,0 -32.71,-5.582 -63.982,-5.582c-65.288,0 -107.96,39.569 -107.96,111.204l0,62.971l-72.573,0l0,82.621l72.573,0l0,192.915l-191.104,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Z" style="fill:#1777f2;"/></svg>
						<span class="ml-3 d-lg-none">Facebook</span>
					</a>
					<!-- youtube -->
					<a href="https://www.youtube.com/channel/UCC_0ZM7Pd5kNa0x8oDyu1YA" class="text-dark px-3 px-lg-2 px-xl-4 py-2 d-block d-lg-inline text-decoration-none">
						<svg height="2.5rem" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="2.5rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M501.299,132.766c-5.888,-22.03 -23.234,-39.377 -45.264,-45.264c-39.932,-10.701 -200.037,-10.701 -200.037,-10.701c0,0 -160.105,0 -200.038,10.701c-22.025,5.887 -39.376,23.234 -45.264,45.264c-10.696,39.928 -10.696,123.236 -10.696,123.236c0,0 0,83.308 10.696,123.232c5.888,22.03 23.239,39.381 45.264,45.268c39.933,10.697 200.038,10.697 200.038,10.697c0,0 160.105,0 200.037,-10.697c22.03,-5.887 39.376,-23.238 45.264,-45.268c10.701,-39.924 10.701,-123.232 10.701,-123.232c0,0 0,-83.308 -10.701,-123.236Z" style="fill:#ed1f24;fill-rule:nonzero;"/><path d="M204.796,332.803l133.018,-76.801l-133.018,-76.801l0,153.602Z" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
						<span class="ml-3 d-lg-none">YouTube</span>
					</a>
					<!-- instagram -->
					<a href="https://www.instagram.com/man1ponorogo/" class="text-dark px-3 px-lg-2 px-xl-4 py-2 d-block d-lg-inline text-decoration-none">
						<svg height="2.5rem" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="2.5rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M256,0c-69.526,0 -78.244,0.295 -105.549,1.541c-27.248,1.243 -45.858,5.57 -62.142,11.899c-16.834,6.542 -31.111,15.296 -45.342,29.528c-14.232,14.231 -22.986,28.508 -29.528,45.342c-6.329,16.283 -10.656,34.893 -11.899,62.141c-1.246,27.305 -1.54,36.023 -1.54,105.549c0,69.524 0.294,78.242 1.54,105.547c1.243,27.248 5.57,45.858 11.899,62.141c6.542,16.834 15.296,31.111 29.528,45.344c14.231,14.231 28.508,22.985 45.342,29.527c16.284,6.328 34.894,10.656 62.142,11.899c27.305,1.245 36.023,1.54 105.549,1.54c69.524,0 78.242,-0.295 105.547,-1.54c27.248,-1.243 45.858,-5.571 62.141,-11.899c16.834,-6.542 31.111,-15.296 45.344,-29.527c14.231,-14.233 22.985,-28.51 29.527,-45.344c6.328,-16.283 10.656,-34.893 11.899,-62.141c1.245,-27.305 1.54,-36.023 1.54,-105.547c0,-69.526 -0.295,-78.244 -1.54,-105.549c-1.243,-27.248 -5.571,-45.858 -11.899,-62.141c-6.542,-16.834 -15.296,-31.111 -29.527,-45.342c-14.233,-14.232 -28.51,-22.986 -45.344,-29.528c-16.283,-6.329 -34.893,-10.656 -62.141,-11.899c-27.305,-1.246 -36.023,-1.541 -105.547,-1.541Zm0,46.127c68.354,0 76.451,0.26 103.445,1.492c24.959,1.139 38.514,5.309 47.535,8.814c11.949,4.644 20.477,10.192 29.435,19.15c8.959,8.958 14.506,17.487 19.15,29.435c3.506,9.021 7.676,22.576 8.815,47.535c1.231,26.995 1.492,35.092 1.492,103.447c0,68.354 -0.261,76.451 -1.492,103.445c-1.139,24.959 -5.309,38.514 -8.815,47.535c-4.644,11.949 -10.191,20.477 -19.15,29.435c-8.958,8.959 -17.486,14.506 -29.435,19.15c-9.021,3.506 -22.576,7.676 -47.535,8.814c-26.99,1.232 -35.086,1.493 -103.445,1.493c-68.361,0 -76.455,-0.261 -103.447,-1.493c-24.959,-1.138 -38.514,-5.308 -47.535,-8.814c-11.949,-4.644 -20.477,-10.191 -29.436,-19.15c-8.958,-8.958 -14.506,-17.486 -19.149,-29.435c-3.506,-9.021 -7.676,-22.576 -8.815,-47.535c-1.232,-26.994 -1.492,-35.091 -1.492,-103.445c0,-68.355 0.26,-76.452 1.492,-103.447c1.139,-24.959 5.309,-38.514 8.815,-47.535c4.643,-11.948 10.191,-20.477 19.149,-29.435c8.959,-8.958 17.487,-14.506 29.436,-19.15c9.021,-3.505 22.576,-7.675 47.535,-8.814c26.995,-1.232 35.092,-1.492 103.447,-1.492Z" style="fill:url(#_Linear1);fill-rule:nonzero;"/><path d="M256,341.332c-47.129,0 -85.334,-38.205 -85.334,-85.332c0,-47.129 38.205,-85.334 85.334,-85.334c47.127,0 85.332,38.205 85.332,85.334c0,47.127 -38.205,85.332 -85.332,85.332Zm0,-216.792c-72.604,0 -131.46,58.856 -131.46,131.46c0,72.602 58.856,131.458 131.46,131.458c72.602,0 131.458,-58.856 131.458,-131.458c0,-72.604 -58.856,-131.46 -131.458,-131.46Z" style="fill:url(#_Linear2);fill-rule:nonzero;"/><path d="M423.372,119.346c0,16.967 -13.754,30.72 -30.72,30.72c-16.966,0 -30.72,-13.753 -30.72,-30.72c0,-16.966 13.754,-30.719 30.72,-30.719c16.966,0 30.72,13.753 30.72,30.719Z" style="fill:url(#_Linear3);fill-rule:nonzero;"/></g><defs><linearGradient gradientTransform="matrix(-149.618,494.3,-494.3,-149.618,300.81,-27.1283)" gradientUnits="userSpaceOnUse" id="_Linear1" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#515bd4;stop-opacity:1"/><stop offset="0.26" style="stop-color:#9510b8;stop-opacity:1"/><stop offset="0.66" style="stop-color:#e51804;stop-opacity:1"/><stop offset="1" style="stop-color:#feda77;stop-opacity:1"/></linearGradient><linearGradient gradientTransform="matrix(-149.618,494.3,-494.3,-149.618,300.81,-27.1283)" gradientUnits="userSpaceOnUse" id="_Linear2" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#515bd4;stop-opacity:1"/><stop offset="0.26" style="stop-color:#9510b8;stop-opacity:1"/><stop offset="0.66" style="stop-color:#e51804;stop-opacity:1"/><stop offset="1" style="stop-color:#ffbf00;stop-opacity:1"/></linearGradient><linearGradient gradientTransform="matrix(-149.618,494.3,-494.3,-149.618,300.81,-27.1283)" gradientUnits="userSpaceOnUse" id="_Linear3" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#515bd4;stop-opacity:1"/><stop offset="0.26" style="stop-color:#9510b8;stop-opacity:1"/><stop offset="0.66" style="stop-color:#e51804;stop-opacity:1"/><stop offset="1" style="stop-color:#ffbf00;stop-opacity:1"/></linearGradient></defs></svg>
						<span class="ml-3 d-lg-none">Instagram</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-5 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 offset-xl-1">
				<div class="font-weight-bold mb-3">Nara Hubung</div>
				<div class="row no-gutters">
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li class="mb-3 text-success pl-1">Robot</li>
							<?php foreach ($contactPerson->where( 'bidang', 'robot' )->findAll() as $cp_robot) : ?>
							
								<li class="media mb-3">
									<?php printf( '<img src="%1$s/%2$s" class="mr-3 rounded-circle" />', base_url('assets/img'), $cp_robot->foto ) ?>
									<div class="media-body">
										<div class="font-weight-bold"><?= $cp_robot->nama ?></div>
										<?php printf( '<a href="https://api.whatsapp.com/send/?phone=%2$s&text=nara+hubung+mancitosh&app_absent=1" target="_blank" class="d-block small text-dark">%1$s</a>', $cp_robot->wa, str_replace(['+62 ', '-'], ['62', ''], $cp_robot->wa) ) ?>
										
										<?php printf( '<a href="https://instagram.com/%1$s" target="_blank" class="d-block small text-dark">@%1$s</a>', $cp_robot->ig ) ?>
									</div>
								</li>

							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li class="mb-3 text-success pl-1">Vlog</li>
							<?php foreach ($contactPerson->where( 'bidang', 'vlog' )->findAll() as $cp_robot) : ?>
							
								<li class="media mb-3">
									<?php printf( '<img src="%1$s/%2$s" class="mr-3 rounded-circle" />', base_url('assets/img'), $cp_robot->foto ) ?>
									<div class="media-body">
										<div class="font-weight-bold"><?= $cp_robot->nama ?></div>
										<?php printf( '<a href="https://api.whatsapp.com/send/?phone=%2$s&text=nara+hubung+mancitosh&app_absent=1" target="_blank" class="d-block small text-dark">%1$s</a>', $cp_robot->wa, str_replace(['+62 ', '-'], ['62', ''], $cp_robot->wa) ) ?>
										
										<?php printf( '<a href="https://instagram.com/%1$s" target="_blank" class="d-block small text-dark">@%1$s</a>', $cp_robot->ig ) ?>
									</div>
								</li>

							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</footer>