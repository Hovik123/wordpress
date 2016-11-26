<?php

/*<ul class="clearlist">

                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Home <i class="fa fa-angle-down"></i></a>

                                <!-- Sub Multilevel -->
                                <ul class="mn-sub mn-has-multi">

                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">Multi Page</a>

                                        <ul>
                                            <li>
                                                <a href="mp-index.html">Main Demo</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-01.html">Image Parallax 1</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-02.html">Image Parallax 2</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-03.html">Image Parallax 3</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-04.html">Image Parallax 4</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-06.html">Image Parallax 5</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-12.html">Fullwidth Image</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-05.html">Text Rotator</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-07.html">Slider Fullscreen</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-08.html">Slider Zoom Effect</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-09.html">Slider Fullwidth</a>
                                            </li>


                                        </ul>

                                    </li>
                                    <!-- End Sub Column -->
                                </ul>
                                <!-- End Sub Multilevel -->

                            </li>
                            <!-- End Item With Sub -->


                                </ul>
                                <!-- End Sub Multilevel -->

                            </li>
                            <!-- End Item With Sub -->


                        </ul>*/

class Walker_menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $submenu = 'mn-sub mn-has-multi';

        $output .= "\n$indent<ul class=\"$submenu\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = '';

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param array $args An array of arguments.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = join(' ', apply_filters('', array_filter($classes), $item, $args, $depth));
        $class_names = $depth >= 2 ? ' class="' . esc_attr('mn-sub-multi') . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names. '>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters('the_title', $item->title, $item->ID);

        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
        $a_href_link = '';
        switch ($depth) {
            case 0:
                $a_href_link = 'mn-has-sub';
                break;
            default:
                $a_href_link = 'mn-has-sub';
                break;
        }
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . " class='$a_href_link'>";
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

}