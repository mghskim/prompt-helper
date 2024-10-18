@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<span style="color:orange">&lt;DALL•E&gt;</span> <span>Helper</span>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
