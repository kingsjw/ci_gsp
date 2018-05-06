<section class="board_section">
	<article class="board_main mains">
		<div class="board_header board_box">
			<p>게시판<br><span class="amp">자유롭게 글을 써보세요!</span></p>
		</div>
		<?php
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
		?>
		<table class="striped centered">
              <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>날짜</th>
                    <th>조회</th>
                </tr>
              </thead>
              <tbody>
								<?php

								$lists = json_decode(json_encode($list), true);
								foreach ($lists as $rows):

									// $rows['idx'] = stripslashes($rows['idx']);
									$rows['title'] = stripslashes($rows['title']);
									$rows['writer'] = stripslashes($rows['writer']);
									$rows['wdate'] = stripslashes($rows['wdate']);
									$rows['hit'] = stripslashes($rows['hit']);
								?>

                <tr>
                  <td><?=$rows['idx']?></td>
                  <td><a href="/board/board_view?idx=<?=$rows['idx']?>" class="title"><?=$rows['title']?></a></td>
                  <td><?=$rows['writer']?></td>
                  <td><?=$rows['wdate']?></td>
                  <td><?=$rows['hit']?></td>
                </tr>
							<?php endforeach; ?>

              </tbody>
            </table>
		<div class="board_footer board_box ">
			<a href="/board/board_write" class="waves-effect waves-light btn">글쓰기</a>
		</div>
		<?php

			print_r($link);
		?>
	</article>
</section>
