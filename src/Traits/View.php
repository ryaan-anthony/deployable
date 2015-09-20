<?php
namespace Deployable\Traits;

trait View
{
    /**
     * The template used to display output
     * @var string
     */
    protected $template;

    /**
     * Get the template
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set the template
     * @param $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * Display the template
     * @return string
     * @throws \Exception
     */
    public function renderView()
    {
        $template = $this->getTemplate();

        if (file_exists($template)) {

            ob_start();

            include $template;

            return ob_get_clean();

        }

        throw new \Exception(sprintf('Template "%s" not found.', $template));
    }

}
