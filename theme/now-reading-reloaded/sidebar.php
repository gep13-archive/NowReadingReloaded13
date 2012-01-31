<div class="now-reading">

	<h3>Current books:</h3>

	<?php if( have_books('status=reading') ) : ?>

		<ul>

		<?php while( have_books('status=reading') ) : the_book(); ?>

			<li>
				<p><a href="<?php book_permalink() ?>"><img src="<?php book_image() ?>" alt="<?php book_title() ?>" /></a></p>
			</li>

		<?php endwhile; ?>

		</ul>

	<?php else : ?>

		<p>None</p>

	<?php endif; ?>

	<p><a href="<?php library_url() ?>">View full Library</a></p>

</div>
