function turn_rm_faq_to_accordion() {
	?>
	<script>
		jQuery(document).ready(function() {
			// Add checkboxes
			jQuery("div#rank-math-faq .rank-math-list-item").each(function() {
				var $item = jQuery(this);
				if ($item.find("input[type='checkbox']").length === 0) {
					$item.prepend('<input type="checkbox" />');
				}
			});
			
			// Click handling with smooth animations
			jQuery("div#rank-math-faq .rank-math-list-item").on('click', function(e) {
				var $item = jQuery(this);
				var $checkbox = $item.find("input[type='checkbox']");
				var $answer = $item.find('.rank-math-answer');
				var $arrow = $item.find('h3');
				
				if ($checkbox.prop('checked')) {
					// Closing
					$answer.slideUp(300, function() {
						$checkbox.prop('checked', false);
					});
					$arrow.removeClass('expanded');
				} else {
					// Opening
					$checkbox.prop('checked', true);
					$answer.slideDown(300);
					$arrow.addClass('expanded');
				}
			});
			
			// Keyboard accessibility
			jQuery("div#rank-math-faq .rank-math-list-item h3").on('keydown', function(e) {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					var $item = jQuery(this).closest('.rank-math-list-item');
					var $checkbox = $item.find("input[type='checkbox']");
					var $answer = $item.find('.rank-math-answer');
					var $arrow = $item.find('h3');
					
					if ($checkbox.prop('checked')) {
						// Closing
						$answer.slideUp(300, function() {
							$checkbox.prop('checked', false);
						});
						$arrow.removeClass('expanded');
					} else {
						// Opening
						$checkbox.prop('checked', true);
						$answer.slideDown(300);
						$arrow.addClass('expanded');
					}
				}
			});
		});
	</script>
    <style>
        .rank-math-list {
            box-shadow: 0px 2px 3px -1px rgba(0, 0, 0, 0.1), 0px 1px 0px 0px rgba(25, 28, 33, 0.02), 0px 0px 0px 1px rgba(25, 28, 33, 0.08);
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }   

        #rank-math-faq .rank-math-list-item {
            position: relative;
        }
        
        #rank-math-faq .rank-math-list-item:last-child h3 {
            border-bottom: 0px;
            padding-bottom: 0px;
        }
        
        #rank-math-faq .rank-math-list-item input {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 41px;
            display: none;
            cursor: pointer;
            z-index: 999;
        }
        
        #rank-math-faq .rank-math-list-item:first-child h3 {
            padding-top: 10px;
        }
        
        #rank-math-faq .rank-math-list-item h3 {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 0px;
            border-bottom: 1px solid rgb(224 225 230);
            padding: 0px 15px 10px 15px;
            font-size: 15px;
            line-height: 22px;
            transition: background-color 0.2s ease, border-color 0.2s ease;
            cursor: pointer;
        }
        
        #rank-math-faq .rank-math-list-item h3:hover {
            background-color: #f8f9fa;
        }
        
        #rank-math-faq .rank-math-list-item h3:focus {
            outline: 2px solid #007cba;
            outline-offset: -2px;
            background-color: #f8f9fa;
        }
        
        #rank-math-faq .rank-math-list-item h3:before {
            display: none;
        }
        
        #rank-math-faq .rank-math-list-item h3:after {
            content: '';
            width: 20px;
            height: 20px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m9 18 6-6-6-6'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            transform: rotate(0deg);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            flex-shrink: 0;
            order: -1;
            margin-right: 8px;
        }
        
        #rank-math-faq .rank-math-list-item h3.expanded:after {
            transform: rotate(90deg);
        }
        
        #rank-math-faq .rank-math-answer {
            padding: 10px 15px 15px 15px;
            display: none;
            background-color: #fafbfc;
            border-top: 1px solid #f0f0f0;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            #rank-math-faq .rank-math-list-item h3 {
                font-size: 14px;
                line-height: 20px;
                padding: 0px 12px 8px 12px;
            }
            
            #rank-math-faq .rank-math-list-item h3:after {
                width: 18px;
                height: 18px;
            }
            
            #rank-math-faq .rank-math-answer {
                padding: 8px 12px 12px 12px;
            }
        }
    </style>
	<?php
}
add_action( 'wp_footer', 'turn_rm_faq_to_accordion' );
