<?php $faqs = getFaqs($conn); ?>
<div class="space bg-smoke">
    <div class="shape-mockup" style="bottom: 0; left: 0%;"><img src="assets/img/shape/faq-2-shape.png" alt="img"></div>
    <div class="shape-mockup spin d-none d-lg-block" style="bottom: 11%; left: 7%;"><img src="assets/img/shape/faq-2-circle-shape.png" alt="img"></div>
    <div class="container">
        <div class="row justify-content-between gy-4">
            <div class="col-lg-5 col-xl-5 col-xxl-4">
                <div class="title-area text-left pe-xxl-5">
                    <p class="sub-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s"><span class="double-line"></span>FAQ</p>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">What would you like to know about Ambr?</h2>
                    <p class="sec-text fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">Ancilla cogo cognomen absorbeo coerceo apto. Ago vulgaris absens decor. Valetudo urbs sollers. Ter tricesimus currus aro vilis suadeo ulterius aveho.</p>
                    <a href="about.php" class="th-btn bg-black pill fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.1s">Free Consultation</a>
                </div>
            </div>
            <div class="col-lg-7 col-xl-7 col-xxl-7">
                <div class="accordion-1 accordion" id="faqAccordion">
                    <?php while ($faq = $faqs->fetch_assoc()) { ?>

                        <div class="accordion-card <?php echo $faq['orderby'] == 1 ? 'active' : '' ?>">
                            <div class="accordion-header" id="collapse-item-<?php echo $faq['orderby'] ?>"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faq['orderby'] ?>" aria-expanded="true" aria-controls="collapse-<?php echo $faq['orderby'] ?>"><span class="serial-numb">
                                    </span><?php echo $faq['title']; ?></button></div>
                            <div id="collapse-<?php echo $faq['orderby'] ?>" class="accordion-collapse collapse <?php echo $faq['orderby'] == 1 ? 'show' : '' ?>" aria-labelledby="collapse-item-<?php echo $faq['orderby'] ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"><?php echo $faq['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>