<?php
/**
 * EWA Elementor Heading Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Elementor_team_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading  widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'elementor-codex-team';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Codex Team', 'elementor-team' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading  widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'elementor-team' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'Codex_Team_Section',
		    [
		        'label' => esc_html__('Codex Team Content','elementor-team'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );

		// Codex Team Card Layout
		
		$this->add_control(
			'team_layout',
			[
				'label' => esc_html__( 'Select Layaout', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::SELECT, 
				'default' => 'team-style-1',
				'options' => [
					'team-style-1'  => esc_html__( 'Team Style 1', 'elementor-name' ), 
					'team-style-2'  => esc_html__( 'Team Style 2', 'elementor-name' ), 
					'team-style-3'  => esc_html__( 'Team Style 3', 'elementor-name' ), 
					'team-style-4'  => esc_html__( 'Team Style 4', 'elementor-name' ), 
					'team-style-5'  => esc_html__( 'Team Style 5', 'elementor-name' ), 
					'team-style-6'  => esc_html__( 'Team Style 6', 'elementor-name' ), 
					'team-style-7'  => esc_html__( 'Team Style 7', 'elementor-name' ), 
					'team-style-8'  => esc_html__( 'Team Style 8', 'elementor-name' ), 
				],
			]
		);

		// Codex Team Card Image

		$this->add_control(
			'team_image',
			[
				'label' => esc_html__( 'Team Image', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

	    // Codex Team Card Name

		$this->add_control(
			'team_name',
			[
				'label' => esc_html__( 'Name', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe', 'elementor-name' ),
				'placeholder' => esc_html__( 'Type your name here', 'elementor-name' ),
				'lable_block' => true,
			]
		);

		
	    // Codex Team Card Degignation

		$this->add_control(
			'team_designation',
			[
				'label' => esc_html__( 'Designation', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'John Doe', 'elementor-name' ),
				'placeholder' => esc_html__( 'Type your name here', 'elementor-name' ),
				'lable_block' => true,
			]
		);

		// Codex Team Social Icon

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'team_name_title',
			[
				'label' => esc_html__( 'Team Social Name', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', 'elementor-name' ),
				'placeholder' => esc_html__( 'Type your icon name here', 'elementor-name' ),
			]
		);

		$repeater->add_control(
			'team_social_icon', [
				'label' => esc_html__( 'Team Social Icon', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				]
		);


		

		$repeater->add_control(
			'team_social_link',
			[
				'label' => esc_html__( 'Team Social Link', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		 

		$this->add_control(
			'team_socials',
			[
				'label' => esc_html__( 'Team Socials', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(), 
				'default' => [
					[
						'team_name_title' =>  esc_html__( 'Facebook', 'elementor-name' ),
						'team_social_icon' => esc_html__( 'https://www.facebook.com', 'elementor-name' ),
						'team_social_link' => esc_html__( 'fa fa-facebook-f', 'elementor-name' ),
					],
					[
						'team_name_title' => esc_html__( 'Twitter', 'elementor-name' ),
						'team_social_icon' => esc_html__( 'https://www.twitter.com', 'elementor-name' ),
						'team_social_link' => esc_html__( 'fab fa-twitter', 'elementor-name' ),
					],
					[
						'team_name_title' => esc_html__( 'linkedin', 'elementor-name' ),
						'team_social_icon' => esc_html__( 'https://www.linkeding.com', 'elementor-name' ),
						'team_social_link' => esc_html__( 'fab fa-linkeding-in', 'elementor-name' ),
					],
				 
				],
				'title_field' => '{{{ team_name_title }}}',
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

		// End of the Contect Section 

		// Start of style tab Section

		// Title Style

		$this->start_controls_section(
			'title_style',
			 [
				 'label' => esc_html__('Title Syle','elementor-team'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 $this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mc-item__caption h3' => 'color: {{VALUE}}',
				],
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY,
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .mc-item__caption h3',
			]
		);

		 $this->end_controls_section();

	   // Designation Style

		$this->start_controls_section(
			'desigination_style',
			 [
				 'label' => esc_html__('Desigination Style','elementor-team'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 
		 $this->add_control(
			'desigination_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mc-item__caption p' => 'color: {{VALUE}}',
				],
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY,
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'designation_typogrphy',
				'selector' => '{{WRAPPER}} .mc-item__caption p',
			]
		);

		 $this->end_controls_section();

		 
	   // Social Icon Style

		$this->start_controls_section(
			'social_icon_style',
			 [
				 'label' => esc_html__('Social Icon Style','elementor-team'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 $this->start_controls_tabs(
			'style_tabs'
		);
		
		$this->start_controls_tab(
			'social_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'elementor-name' ),
			]
		);

		$this->add_control(
			'social_icon_color',
			[
				'label' => esc_html__( 'Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social_icon a i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_bg_color',
			[
				'label' => esc_html__( 'Backgorund Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social_icon a i' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_icon_size',
			[
				'label' => esc_html__( 'Size', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					 
				],
				'default' => [
					'unit' => 'px',
					'size' => 32,
				],
				'selectors' => [
					'{{WRAPPER}} .social_icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'social_icon_border',
			[
				'label' => esc_html__( 'Border Radius', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', ],
				'selectors' => [
					'{{WRAPPER}} .social_icon a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'social_padding_border',
			[
				'label' => esc_html__( 'padding', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px'],
				'selectors' => [
					'{{WRAPPER}} .social_icon a i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_tab();

		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'elementor-name' ),
			]
		);

		$this->add_control(
			'hover_social_icon_color',
			[
				'label' => esc_html__( ' Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social_icon a i:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'hover_social_bg_color',
			[
				'label' => esc_html__( ' Backgorund Color', 'elementor-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social_icon a i:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tabs();

		 $this->end_controls_section();

	}

	/**
	 * Render heading  widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display(); 
		$team_layout = $settings['team_layout'];
		$team_image = $settings['team_image'];
		$team_name = $settings['team_name'];
		$team_designation = $settings['team_designation'];
		$team_designation = $settings['team_designation'];
		$team_socials = $settings['team_socials'];
		
		
		 
		 
		switch ($team_layout) {
			case "team-style-1":
				include( __DIR__ . '/parts/team-style-1.php' );
				break;
			case "team-style-2":
				include( __DIR__ . '/parts/team-style-2.php' );
				break;
			case "team-style-3":
				include( __DIR__ . '/parts/team-style-3.php' );
				break;
			case "team-style-4":
				include( __DIR__ . '/parts/team-style-4.php' );
				break;
			case "team-style-5":
				include( __DIR__ . '/parts/team-style-5.php' );
				break;
			case "team-style-6":
				include( __DIR__ . '/parts/team-style-6.php' );
				break;
			case "team-style-7":
				include( __DIR__ . '/parts/team-style-7.php' );
				break;
			case "team-style-8":
				include( __DIR__ . '/parts/team-style-8.php' );
				break;
	
			default:
			include( __DIR__ . '/parts/team-style-1.php' );
			}

       
	}
}