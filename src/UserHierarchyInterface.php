<?php
namespace VirtualComplete\UserHierarchy;

interface UserHierarchyInterface
{
    /**
     * Return the User model of the parent user or null if no parent exists
     *
     * @return $this|\Illuminate\Database\Eloquent\Relations\BelongsTo|null
     */
    public function parent();

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|$this[]
     */
    public function children();
}
