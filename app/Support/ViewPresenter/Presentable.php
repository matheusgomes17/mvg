<?php

namespace MVG\Support\ViewPresenter;

/**
 * Trait Presentable
 * @package MVG\Support\ViewPresenter
 */
trait Presentable
{
    /**
     * View presenter instance.
     *
     * @var mixed
     */
    protected $instance;

    /**
     * Returns a new or existing presenter instance.
     *
     * @throws PresenterException
     *
     * @return mixed
     */
    public function present()
    {
        if (! $this->presenter or ! class_exists($this->presenter)) {
            throw new PresenterException('Please set the $presenter property to your presenter path.');
        }

        if (! $this->instance) {
            $this->instance = new $this->presenter($this);
        }

        return $this->instance;
    }
}