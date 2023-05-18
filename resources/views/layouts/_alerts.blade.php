<div class="mb-3">
    {{-- session success  dismissible --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif


    {{-- session error  dismissible --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session info  dismissible --}}
    @if (session('info'))
        <div class="alert alert-info alert-dismissible fade show m-0" role="alert">
            <strong>Info!</strong> {{ session('info') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session warning  dismissible --}}

    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
            <strong>Warning!</strong> {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session status  dismissible --}}
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
            <strong>Success!</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session message  dismissible --}}
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
            <strong>Success!</strong> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session error  dismissible --}}

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

    {{-- session warning  dismissible --}}
    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
            <strong>Warning!</strong> {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
    @endif
    {{-- errors --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
            <strong>Error!</strong>
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li class="m-0">{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
        </div>
    @endif

</div>
