<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/alumno')) {
            // alumno
            if (rtrim($pathinfo, '/') === '/alumno') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_alumno;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'alumno');
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::indexAction',  '_route' => 'alumno',);
            }
            not_alumno:

            // alumno_create
            if ($pathinfo === '/alumno/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_alumno_create;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::createAction',  '_route' => 'alumno_create',);
            }
            not_alumno_create:

            // alumno_new
            if ($pathinfo === '/alumno/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_alumno_new;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::newAction',  '_route' => 'alumno_new',);
            }
            not_alumno_new:

            // alumno_show
            if (preg_match('#^/alumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_alumno_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_show')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::showAction',));
            }
            not_alumno_show:

            // alumno_edit
            if (preg_match('#^/alumno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_alumno_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_edit')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::editAction',));
            }
            not_alumno_edit:

            // alumno_update
            if (preg_match('#^/alumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_alumno_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_update')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::updateAction',));
            }
            not_alumno_update:

            // alumno_delete
            if (preg_match('#^/alumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_alumno_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_delete')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\AlumnoController::deleteAction',));
            }
            not_alumno_delete:

        }

        // omar_escuela_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'omar_escuela_default_index')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/grupo')) {
            // grupo
            if (rtrim($pathinfo, '/') === '/grupo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'grupo');
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::indexAction',  '_route' => 'grupo',);
            }
            not_grupo:

            // grupo_create
            if ($pathinfo === '/grupo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_grupo_create;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::createAction',  '_route' => 'grupo_create',);
            }
            not_grupo_create:

            // grupo_new
            if ($pathinfo === '/grupo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo_new;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::newAction',  '_route' => 'grupo_new',);
            }
            not_grupo_new:

            // grupo_show
            if (preg_match('#^/grupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_show')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::showAction',));
            }
            not_grupo_show:

            // grupo_edit
            if (preg_match('#^/grupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_edit')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::editAction',));
            }
            not_grupo_edit:

            // grupo_update
            if (preg_match('#^/grupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_grupo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_update')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::updateAction',));
            }
            not_grupo_update:

            // grupo_delete
            if (preg_match('#^/grupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_grupo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_delete')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\GrupoController::deleteAction',));
            }
            not_grupo_delete:

        }

        if (0 === strpos($pathinfo, '/horario')) {
            // horario
            if (rtrim($pathinfo, '/') === '/horario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_horario;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'horario');
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::indexAction',  '_route' => 'horario',);
            }
            not_horario:

            // horario_create
            if ($pathinfo === '/horario/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_horario_create;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::createAction',  '_route' => 'horario_create',);
            }
            not_horario_create:

            // horario_new
            if ($pathinfo === '/horario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_horario_new;
                }

                return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::newAction',  '_route' => 'horario_new',);
            }
            not_horario_new:

            // horario_show
            if (preg_match('#^/horario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_horario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_show')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::showAction',));
            }
            not_horario_show:

            // horario_edit
            if (preg_match('#^/horario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_horario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_edit')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::editAction',));
            }
            not_horario_edit:

            // horario_update
            if (preg_match('#^/horario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_horario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_update')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::updateAction',));
            }
            not_horario_update:

            // horario_delete
            if (preg_match('#^/horario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_horario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_delete')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\HorarioController::deleteAction',));
            }
            not_horario_delete:

        }

        if (0 === strpos($pathinfo, '/ma')) {
            if (0 === strpos($pathinfo, '/maestro')) {
                // maestro
                if (rtrim($pathinfo, '/') === '/maestro') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maestro;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'maestro');
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::indexAction',  '_route' => 'maestro',);
                }
                not_maestro:

                // maestro_create
                if ($pathinfo === '/maestro/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_maestro_create;
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::createAction',  '_route' => 'maestro_create',);
                }
                not_maestro_create:

                // maestro_new
                if ($pathinfo === '/maestro/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maestro_new;
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::newAction',  '_route' => 'maestro_new',);
                }
                not_maestro_new:

                // maestro_show
                if (preg_match('#^/maestro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maestro_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestro_show')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::showAction',));
                }
                not_maestro_show:

                // maestro_edit
                if (preg_match('#^/maestro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maestro_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestro_edit')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::editAction',));
                }
                not_maestro_edit:

                // maestro_update
                if (preg_match('#^/maestro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_maestro_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestro_update')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::updateAction',));
                }
                not_maestro_update:

                // maestro_delete
                if (preg_match('#^/maestro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_maestro_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maestro_delete')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MaestroController::deleteAction',));
                }
                not_maestro_delete:

            }

            if (0 === strpos($pathinfo, '/materia')) {
                // materia
                if (rtrim($pathinfo, '/') === '/materia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_materia;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'materia');
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::indexAction',  '_route' => 'materia',);
                }
                not_materia:

                // materia_create
                if ($pathinfo === '/materia/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_materia_create;
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::createAction',  '_route' => 'materia_create',);
                }
                not_materia_create:

                // materia_new
                if ($pathinfo === '/materia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_materia_new;
                    }

                    return array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::newAction',  '_route' => 'materia_new',);
                }
                not_materia_new:

                // materia_show
                if (preg_match('#^/materia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_materia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_show')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::showAction',));
                }
                not_materia_show:

                // materia_edit
                if (preg_match('#^/materia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_materia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_edit')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::editAction',));
                }
                not_materia_edit:

                // materia_update
                if (preg_match('#^/materia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_materia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_update')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::updateAction',));
                }
                not_materia_update:

                // materia_delete
                if (preg_match('#^/materia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_materia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_delete')), array (  '_controller' => 'Omar\\EscuelaBundle\\Controller\\MateriaController::deleteAction',));
                }
                not_materia_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
