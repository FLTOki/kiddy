<script type="text/javascript">
var ItemsVue = new Vue({
    el: '#Itemlist',
    data: {
        items: []
    },
    mounted: function () {
        var self = this;
        $.ajax({
            url: '/items',
            method: 'GET',
            success: function (data) {
                self.items = JSON.parse(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});
</script>

<div id="Itemlist">
    <table class="table">
        <tr>
            <th>Item</th>
            <th>Year</th>
        </tr>
        <tr v-for="item in items">
            <td>{{item.DisplayName}}</td>
            <td>{{item.Year}}</td>
        </tr>
    </table>
</div>
