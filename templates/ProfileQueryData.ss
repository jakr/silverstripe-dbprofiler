<table id="profile-query-data" class="tablesorter">
			<caption>Queries</caption>
			<thead>
				<tr>
					<th id="head-requests" class="header">Queries</th>
					<th id="head-time" class="header">Time</th>
					<th id="head-query-size" class="header">Query size</th>
					<th id="head-query" class="header">Query</th>
					<th id="head-backtrace" class="header">Backtrace</th>
				</tr>
			</thead>
			<tbody>
				<% control Queries %>
				<tr>
					<td class="center">$Requests</td>
					<td class="right">$Time</td>
					<td class="right">$QuerySize</td>
					<td class="center">
						<a class="doit" href="$BaseHref/ProfilerLogViewerController/Query/$ID">View</a>
						<a class="doit" href="$BaseHref/ProfilerLogViewerController/Describe/$ID">Explain</a>
					</td>
					<td class="center">
						<a class="doit" href="$BaseHref/ProfilerLogViewerController/Backtrace/$ID">Show</a>
					</td>
				</tr>
				<% end_control %>
			</tbody>
		</table>