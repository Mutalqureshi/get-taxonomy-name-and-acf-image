
https://developer.wordpress.org/reference/functions/get_terms/#comment-2180

all perameter ->  

function wpb_demo_shortcode() { 
$html = ''; 
  $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => true,
            'number' => 2, //can be 0, '0', '' too
            'taxonomy' => 'pa_ag_category', //taxonomy name here
        ) );
                $html .= '<div class="ag_cate_customt clearfix">';
                $html .= '<ul>';
					   foreach ($categories as $term){
					            $term_id = $term->term_id;
					            $term_name = $term->cat_name;
					            $size = 'ag_category_image';
					            $image_id = get_field('ag_category_image', $term, false);
					            $cate_img = wp_get_attachment_image_url($image_id, $size);
					            // print_r($cate_img);
					                $html .= '<li>';
						                $html .= '<a href="#">';
							                $html .= '<img src="'.$cate_img.'">';
							                $html .= '<p>'.$term_name.'</p>';
													
						                $html .= '</a>';
					                $html .= '</li>';
					   }
                $html .= '</ul>';
                $html .= '</div>';
 
return $html;
} 
add_shortcode('ag_category', 'wpb_demo_shortcode'); 