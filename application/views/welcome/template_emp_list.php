<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    {{#each list}}
    <tr>
        <td>{{id}}</td>
        <td>{{name}}</td>
        <td>{{salary}}</td>
    </tr>
    {{/each}}
</table>