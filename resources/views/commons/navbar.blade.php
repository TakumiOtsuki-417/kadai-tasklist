<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content justify-between">
        <div class="flex">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">タスク管理アプリ</a></h1>
        </div>

        <div class="flex-none">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                    @if (Auth::check())
                        {{-- タスク一覧リンク --}}
                        <li><a class="link link-hover" href="{{ route('tasks.index') }}">タスク一覧</a></li>
                        {{-- 新規タスクリンク --}}
                        <li><a class="link link-hover" href="{{ route('tasks.create') }}">タスク作成</a></li>
                        {{-- ログアウトリンク --}}
                        <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
                    @else
                        {{-- ユーザ登録ページへのリンク --}}
                        <li><a class="link link-hover" href="{{ route('register') }}">ユーザー登録</a></li>
                        <li class="divider lg:hidden"></li>
                        {{-- ログインページへのリンク --}}
                        <li><a class="link link-hover" href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
                <div class="dropdown dropdown-end">
                    <button type="button" tabindex="0" class="btn btn-square btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                    @if (Auth::check())
                        {{-- タスク一覧リンク --}}
                        <li><a class="link link-hover" href="{{ route('tasks.index') }}">タスク一覧</a></li>
                        {{-- 新規タスクリンク --}}
                        <li><a class="link link-hover" href="{{ route('tasks.create') }}">タスク作成</a></li>
                        {{-- ログアウトリンク --}}
                        <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a></li>
                    @else
                        {{-- ユーザ登録ページへのリンク --}}
                        <li><a class="link link-hover" href="{{ route('register') }}">ユーザー登録</a></li>
                        <li class="divider lg:hidden"></li>
                        {{-- ログインページへのリンク --}}
                        <li><a class="link link-hover" href="{{ route('login') }}">ログイン</a></li>
                    @endif
                    </ul>
                </div>
            </form>
        </div>
    </nav>
</header>