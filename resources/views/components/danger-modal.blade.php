<!-- resources/views/components/modal.blade.php -->
<div class="hidden fixed top-0 left-0 w-full h-full z-[999]" style="background: rgba(0, 0, 0, 0.5);" id="modalOverlay"></div>

<div id="deleteModal" class="hidden fixed top-2/4 left-2/4 transform -translate-x-1/2 -translate-y-1/2 z-[1000] bg-white text-left rounded-lg max-w-72 shadow-2xl">
    <div class="p-5 px-4 bg-white rounded-lg">
        <div class="flex mx-auto bg-red-100 flex-shrink-0 justify-center items-center w-12 h-12 rounded-full">
            <x-danger-image class="text-red-600 w-6 h-6"/>
        </div>
        <div class="mt-3 text-center">
            <span id="modalTitle" class="text-gray-900 text-base font-semibold leading-6">{{ __('Delete user') }}</span>
            <p id="modalMessage" class="mt-2 text-gray-500 text-sm leading-5">
                 {{ __('Are you sure you want to delete a user? All of your data will be permanently removed. This action cannot be undone.') }}
            </p>
        </div>
        <div class="my-3 mx-4 bg-gray-50">
            <a id="confirmDeleteButton" class="inline-flex items-center justify-center w-full px-4 py-2 bg-red-600 text-white text-base leading-6 font-medium border border-transparent rounded-md shadow transition-all duration-200 ease-in-out hover:bg-transparent hover:border hover:border-red-600 hover:text-red-600" href="{{ $actionUrl }}" type="button">{{ __('Delete') }}</a>
            <button class="inline-flex justify-center items-center mt-3 w-full px-4 py-2 bg-white text-gray-800 text-base leading-6 font-medium border border-gray-300 rounded-md shadow transition-all duration-200 ease-in-out hover:bg-gray-300 hover:border hover:border-gray-300" type="button" onclick="toggleModal()">{{ __('Cancel') }}</button>
        </div>
    </div>
</div>

<script>
function showDeleteModal(deleteUrl, title, message) {
    const modal = document.getElementById('deleteModal');
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');
    const overlay = document.getElementById('modalOverlay');

    confirmDeleteButton.href = deleteUrl;
    modal.style.display = 'block';
    overlay.style.display = 'block';
}

function toggleModal() {
    const modal = document.getElementById('deleteModal');
    const overlay = document.getElementById('modalOverlay');

    modal.style.display = 'none';
    overlay.style.display = 'none';
}
</script>

