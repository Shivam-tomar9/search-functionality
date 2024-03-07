//blade code

<div class="form-inline" style="margin-top: 12px;">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" id="searchInput" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar" id="searchButton">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

//script code
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase(); // Convert search text to lowercase for case-insensitive search
        $('.item-to-search').each(function() {
            var textToSearch = $(this).text().toLowerCase(); // Get text content of the element to search
            if (textToSearch.indexOf(searchText) !== -1) { // Check if the text contains the search query
                $(this).show(); // Show the element if it matches the search query
            } else {
                $(this).hide(); // Hide the element if it doesn't match the search query
            }
        });
    });
});
</script>
