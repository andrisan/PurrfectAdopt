<div id="success-popup" class="fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-yellow-400 rounded-lg shadow-lg p-6">
        <div class="text-center">
            <h2 class="text-3xl font-semibold mb-4 text-black">Success!</h2>
            <p class="text-lg before:text-white">{{ session('success') }}</p>
        </div>
        <div class="mt-6 text-center">
            <button onclick="closePopup()" class="text-sm text-black bg-white hover:bg-yellow-600 rounded-lg  px-6 py-3">Close</button>
        </div>
    </div>
</div>

<script>
    function closePopup() {
        var popup = document.getElementById('success-popup');
        popup.style.display = 'none';
    }
</script>
