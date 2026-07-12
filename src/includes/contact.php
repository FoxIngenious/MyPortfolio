 <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="reveal" id="titleContenanaire">
                <h2 style="color: white;" class="title" >CONTACTEZ-MOI</h2>
                <div class="line" style="background: #d4b95c"></div>
            </div>
            <div class="contact-container">
                <div class="contact-info reveal">
                    <h3>Discutons de Votre Projet</h3>
                    <p>
                        Je suis disponible pour un stage ou des collaborations. N'hésitez pas à me contacter 
                        pour discuter de vos projets ou opportunités.
                    </p>
                    
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <p>jacksoncamilledoringa@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Téléphone</strong>
                            <p>+231 37 61 25 003</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Localisation</strong>
                            <p>Antananarivo, Madagascar</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-university"></i>
                        <div>
                            <strong>Formation</strong>
                            <p>ISSTM - Génie Informatique</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form reveal">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" id="name" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" placeholder="Sujet du message" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="4" placeholder="Votre message..." required></textarea>
                        </div>
                        <button type="submit" class="btn-submit bttn">
                            <i class="fas fa-paper-plane "></i> Envoyer le Message
                        </button>
                    </form>
                </div>
            </div>

            <style>
                                /* ------------------Contact-------------- */
                .contact{
                    color: #fff;
                }
                #titleContenanaire{
                    display: grid;

                }
                #titleContenanaire h2{
                    margin: auto auto 5% auto;
                }
                .contact-container{
                    max-width: 1000px;
                    margin: 0 auto;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 3rem;
                    position: relative;
                    z-index: 2;
                }
                .contact-info h3 {
                    font-size: 2rem;
                    margin-bottom: 1rem;
                }

                .contact-info p {
                    opacity: 0.9;
                    margin-bottom: 2rem;
                    line-height: 1.6;
                }

                .contact-item {
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                    margin-bottom: 1.5rem;
                    padding: 1rem;
                    background: rgba(255,255,255,0.1);
                    border-radius: 10px;
                    backdrop-filter: blur(10px);
                    transition: all 0.3s ease;
                }
                .contact-item:hover {
                    background: rgba(178, 72, 192, 0.2);
                    transform: translateX(5px);
                }
                .contact-item i {
                    font-size: 1.2rem;
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: rgba(178, 72, 192, 0.2);
                    border-radius: 50%;
                }
                .contact-form {
                    background: #fff;
                    padding: 2rem;
                    border-radius: 20px;
                    color: #003366;
                    place-items: center;
                    max-height:95%;
                }
                #contactForm{
                    width: 100%;
                    align-items:center;
                }

                .form-group {
                    margin-bottom: 1.5rem;
                }

                .form-group label {
                    color:#d2b48c;
                    display: block;
                    margin-bottom: 0.5rem;
                    font-weight: 600;
                }

                .form-group input,
                .form-group textarea {
                    width: 100%;
                    padding: 0.8rem;
                    border: 2px solid #e0e0e0;
                    border-radius: 8px;
                    font-family: inherit;
                    transition: all 0.3s ease;
                }

                .form-group input:focus,
                .form-group textarea:focus {
                    outline: none;
                    border-color: #003366;
                }
                .btn-submit {
                    width: 100%;
                    padding: 1rem;
                    background: #d4b95c;
                    color: #fff;
                    border: none;
                    border-radius: 8px;
                    font-size: 1rem;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    animation: none;
                }

            </style>
        </section>