<?php

/**
 * Class NTemplatingEngine <br>
 * A super simple engine that renders a view with data and uses variable prefixing.
 *
 * @author Ingo Andelhofs
 */
class NTemplatingEngine extends BaseTemplateEngine implements TemplateEngineStrategy {
  public function compile_render(string $file, array $data) {
    try {
      $content_file = $this->get_file_content($file, PATH_VIEWS, 'View file does not exist');
      $this->render_file($content_file, $data);
    }
    catch (FlashTemplateEngineException $e) {
      (new Response())->error("@NTemplateEngine".$e);
    }
  }
}