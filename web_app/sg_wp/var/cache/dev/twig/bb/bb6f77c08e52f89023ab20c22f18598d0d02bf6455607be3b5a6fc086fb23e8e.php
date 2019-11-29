<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* current/current.html.twig */
class __TwigTemplate_344b1af9578381a97d6e4bfab4fff474e8ed493fb2fca0f8fc185620380bfddc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "current/current.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "current/current.html.twig"));

        // line 1
        echo "<html>
<head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
            integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
            crossorigin=\"\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
</head>
<body>
<h1>
    <nav class=\"navbar navbar-expand-sm bg-light\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Confmark</a>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <h4>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y H:i:s"), "html", null, true);
        echo "</h4>
                </li>
            </ul>

        </div>
    </nav>
    <div class=\"container-fluid\">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Speaker 1</th>
                <th scope=\"col\">Speaker 2</th>
                <th scope=\"col\">Speaker 3</th>
                <th scope=\"col\">Room</th>
                <th scope=\"col\">Title of the presentation</th>
                <th scope=\"col\">Summary</th>
                <th scope=\"col\">Start time</th>
                <th scope=\"col\">End time</th>
                <th scope=\"col\">hashtag</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope=\"row\">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope=\"row\">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</h1>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "current/current.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
            integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
            crossorigin=\"\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
</head>
<body>
<h1>
    <nav class=\"navbar navbar-expand-sm bg-light\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Confmark</a>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <h4>{{ \"now\"|date(\"m/d/Y H:i:s\") }}</h4>
                </li>
            </ul>

        </div>
    </nav>
    <div class=\"container-fluid\">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Speaker 1</th>
                <th scope=\"col\">Speaker 2</th>
                <th scope=\"col\">Speaker 3</th>
                <th scope=\"col\">Room</th>
                <th scope=\"col\">Title of the presentation</th>
                <th scope=\"col\">Summary</th>
                <th scope=\"col\">Start time</th>
                <th scope=\"col\">End time</th>
                <th scope=\"col\">hashtag</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope=\"row\">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope=\"row\">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</h1>
</body>
</html>", "current/current.html.twig", "C:\\Users\\Operator1\\Documents\\GitHub\\open-cx-sg1\\open-cx-sg\\web_app\\sg_wp\\templates\\current\\current.html.twig");
    }
}
