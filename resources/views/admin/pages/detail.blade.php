@extends('admin.master')

@section('title', Lang::get('Details Page'))

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{!! url('/admin') !!}"><i class="fas fa-home"></i> @lang('Dashboard') /</a>
	<a href="{!! route('Pages') !!}"><i class="fas fa-list-alt"></i> @lang('Pages') /</a>
	<a href="{!! url('admin/page/'.$page->id.'/detail') !!}"><i class="fas fa-eye"></i> @lang('Details')</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title"><img src="{{asset('storage/svg/023-data.svg')}}"> @lang('Details Page')</h2>
					<a class="btn btn-danger btn-back" href="{!! route('Pages') !!}"><i class="fas fa-undo-alt"></i> @lang('Back to Pages')</i></a>
				</div>

			<div class="inside">
				<div class="form-row">

					<div class="col-md-8">
				        <label for="title">@lang('Title')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-marker"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('title', $page->title, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-2">
						<fieldset disabled="">
						<label for="robots">@lang('Allow Robots')</label>
						<div class="input-group">
							<div class="input-group-prepend">
	                           <span class="input-group-text" id="basic-addon1">
	                           	   <i class="fas fa-robot"></i>
	                           	</span>
	                        </div>
	                        {!! Form::select('robots', ['index' => 'Index', 'noindex' => 'No Index'], $page->robots, ['class' => 'custom-select', 'readonly']) !!}
						</div>
						</fieldset>
					</div>

					<div class="col-md-2">
						<fieldset disabled="">
						<label for="links">@lang('Follow Links')</label>
						<div class="input-group">
							<div class="input-group-prepend">
	                           <span class="input-group-text" id="basic-addon1">
	                           	   <i class="fas fa-link"></i>
	                           	</span>
	                        </div>
	                        {!! Form::select('links', ['follow' => 'Follow', 'nofollow' => 'No Follow'], $page->links, ['class' => 'custom-select required']) !!}
						</div>
						</fieldset>
					</div>

					<div class="col-md-8 mtop16">
				        <label for="short">@lang('Short')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
				      	    	<span class="input-group-text" id="basic-addon1">
		                   	   		<i class="fas fa-tags"></i>
		                   		</span>
		                   	</div>
						  {!! Form::text('short', $page->short, ['class' => 'form-control', 'readonly']) !!}
						</div>
					</div>

					<div class="col-md-2 mtop16">
						<fieldset disabled="">
						<label for="status">@lang('Status')</label>
						<div class="input-group">
							<div class="input-group-prepend">
		                       <span class="input-group-text" id="basic-addon1">
		                       	   <i class="fas fa-toggle-on"></i>
		                       	</span>
		                    </div>
		                    {!! Form::select('status', ['0' => 'Borrador', '1' => 'Publico'], $page->status, ['class' => 'custom-select', 'readonly']) !!}
						</div>
						</fieldset>
					</div>

					<div class="col-md-2 mtop16">
						<fieldset disabled="">
				        <label for="category">@lang('Category')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-folder-open"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('category', $page->category, ['class' => 'custom-select', 'readonly']) !!}
				     	</div>
				     	</fieldset>
					</div>

					<div class="col-md-9 mtop16">
				        <label for="meta_keywords">@lang('Meta Keywords')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fab fa-searchengin"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('meta_keywords', $page->meta_keywords, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-3 mtop16">
				        <label for="user">@lang('Created by')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-user"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('user', $page->user->nick, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-9 mtop16">
				        <label for="meta_description">@lang('Meta Description')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fab fa-searchengin"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('meta_description', $page->meta_description, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-3 mtop16">
				        <label for="created_at">@lang('Created on')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-calendar-alt"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('created_at', $page->created_at, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-9 mtop16">
				        <label for="slug">@lang('Friendly Url')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fab fa-angellist"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('slug', $page->slug, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-3 mtop16">
				        <label for="updated_at">@lang('Last Modification')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-calendar-check"></i>
                           		</span>
                        	</div>
                        	{!! Form::text('updated_at', $page->updated_at, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

					<div class="col-md-12 mtop16">
				        <label for="content">@lang('Content')</label>
				        <div class="input-group">
				      	    <div class="input-group-prepend">
                           		<span class="input-group-text" id="basic-addon1">
                           	   		<i class="fas fa-keyboard"></i>
                           		</span>
                        	</div>
                        	{!! Form::textarea('content', $page->content, ['class' => 'form-control', 'readonly']) !!}
				     	</div>
					</div>

				</div>
			</div>
		</div>
	</div>


		<div class="col-md-3">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title"><i class="far fa-image"></i> @lang('Outstanding Image')</h2>
					<div class="inside">
						<img src="{!! asset('storage/pages/'.$page->file_path.'/'.$page->image) !!}" class="img-fluid" alt="@lang('Page Image')">
					</div>
				</div>
			</div>

			<div class="panel shadow mtop16 lateral">
				<div class="header">
					<h2 class="title">Proximas zonas <i class="fas fa-question"></i></h2>
					<div class="inside">

					</div>
				</div>
			</div>

			<div class="panel shadow mtop16 lateral">
				<div class="header">
					<h2 class="title">Proximas zonas <i class="fas fa-question"></i></h2>
					<div class="inside">
						<p>Prueba</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
