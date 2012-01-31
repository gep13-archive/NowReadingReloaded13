<?php get_header() ?>

<div id="primary">
			<div id="content" role="main">

	<div class="post">

		<?php if( can_now_reading_admin() ) : ?>

			<p>Admin: &raquo; <a href="<?php manage_library_url() ?>"><?php __('Manage Books', NRTD);?></a></p>

		<?php endif; ?>

		<p><?php total_books() ?> overall; <?php books_read_since('1 year') ?> read in the last year; <?php books_read_since('1 month') ?> <?php printf(__('read in the last month. That\'s', NRTD));?> <?php average_books('month'); ?>.</p>

		<?php library_search_form() ?>

		<h2>Current books (<?php echo total_books('reading', 0) ?>):</h2>

		<?php if( have_books('status=reading&num=-1') ) : ?>

			<?php while( have_books('status=reading&num=-1') ) : the_book(); ?>

			<div class="item" style="float: left; padding: 10px; width: 60%;">
				<a href="<?php book_permalink() ?>"><img src="<?php book_image() ?>" alt="<?php book_title() ?>" style="float: left; margin-right: 20px;" /></a>
				<p><strong><?php book_title() ?></strong></p>
				<p><?php book_author() ?></p>
				<p><a href="<?php book_permalink() ?>">Book Details</a></p>
			</div>

			<?php endwhile; ?>

		<?php else : ?>

			<p>None</p>

		<?php endif; ?>

		<h2>Planned books (<?php echo total_books('unread', 0) ?>):</h2>

		<?php if( have_books('status=unread&num=-1') ) : ?>

			<ul>

			<?php while( have_books('status=unread&num=-1') ) : the_book(); ?>

				<li><a href="<?php book_permalink() ?>"><?php book_title() ?></a> by <a href="<?php book_author_permalink() ?>"><?php book_author() ?></a></li>

			<?php endwhile; ?>

			</ul>

		<?php else : ?>

			<p>None</p>

		<?php endif; ?>

		<h2>Recent books (<?php echo total_books('read', 0) ?>):</h2>

		<?php if( have_books('status=read&orderby=finished&order=desc&num=-1') ) : ?>

			<ul>

			<?php while( have_books('status=read&orderby=finished&order=desc&num=-1') ) : the_book(); ?>

				<li><a href="<?php book_permalink() ?>"><?php book_title() ?></a> by <a href="<?php book_author_permalink() ?>"><?php book_author() ?></a></li>

			<?php endwhile; ?>

			</ul>

		<?php else : ?>

			<p>None</p>

		<?php endif; ?>

		<?php do_action('nr_footer'); ?>

	</div>

	</div>

</div>

<?php get_sidebar() ?>

<?php get_footer() ?>
