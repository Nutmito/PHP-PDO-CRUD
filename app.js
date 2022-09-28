function delFunction() {
    Swal.fire({
        title: 'แน่ใจแล้วใช่ไหม?',
        text: "คุณจะไม่สามารถกู้คืนข้อมูลได้",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {            
    if (result.value) {
        Swal.fire({
            title: "ลบข้อมูลสำเร็จ",
            icon: "success",
            timerProgressBar: true,
            showConfirmButton: false,
            timer: 1000
        });

        setTimeout(delre, 1000);
            
        }
    })
}