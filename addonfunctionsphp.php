//Inicio das cores personalizadas
function meu_tema_personalizado($wp_customize) {

  // Adicionando a seção de cores personalizadas
  $wp_customize->add_section('cores_personalizadas', array(
    'title' => __('Cores Personalizadas', 'meu-tema'),
    'description' => __('Personalize as cores do seu tema', 'meu-tema'),
    'priority' => 30
  ));

  // Adicionando a opção de cor padrão do tema
  $wp_customize->add_setting('cor_padrao', array(
    'default' => '#213465',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_padrao', array(
    'label' => __('Cor Padrão do Tema', 'meu-tema'),
    'section' => 'cores_personalizadas',
    'settings' => 'cor_padrao'
  )));

}
add_action('customize_register', 'meu_tema_personalizado');
//Fim das cores personalizadas