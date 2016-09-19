@if(Session::has('flash_message'))
	<div class="alert alert-success @if(Session::has('flash-important')) {{ 'alert-important' }} @endif">
		@if(Session::has('flash-important'))
			<button type="button" class="close" data-dismiss="alert" area-hidden="true">
				$times;
			</button>
		@endif

		{{ session('flash_message') }}
	</div>
@endif