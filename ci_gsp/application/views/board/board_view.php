<section class="view_section">
	<article class="view_main mains">
		<div class="view_header view_box">
			<p><?=$title?><br> <span class="amp">작성자 : <?=$writer?></span></p>
		</div>
		<div class="view_content not_view_box">
			<div class="view_box_content">
				<p><?=$content?></p>
			</div>
			<div class="gsp_view_box_footer">
				<ul class="footer_ui">
					<?php

					?>
					<li><a href="/gsp/Modified?idx=" class="waves-effect waves-light btn">수정</a></li>
					<li><a href="/gsp/delete?idx=" class="waves-effect waves-light btn">삭제</a></li>
					<?php
						
					?>
				</ul>
			</div>
		</div>
		<div class="view_footer view_box "></div>
	</article>
</section>
