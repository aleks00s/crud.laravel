<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Post\BaseController;
use App\Models\Post;


class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
       $this->service->destroy($post);
        return redirect()->route('admin.posts.index');
    }
}
