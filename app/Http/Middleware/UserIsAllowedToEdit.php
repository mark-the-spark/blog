<?php

namespace App\Http\Middleware;

use Closure;

class UserIsAllowedToEdit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $article = \App\Article::find($request->segment(1));

        //if user isn't author or admin -> redirect to login

        if ($this->isAdmin($request->user()) || $this->isAuthor($request->user(), $article->user_id))
        {
            return $next($request);
        }

        \Session::flash('error', 'You are not allowed to edit this article');
        return redirect('/');
    }


    public function isAdmin($user)
    {
        return $user->hasRole('admin');
    }


    public function isAuthor($user, $article_author_id)
    {
        if ($user->id == $article_author_id) return true;

        return false;
    }
}
