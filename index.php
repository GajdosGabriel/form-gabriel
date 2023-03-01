<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Gabriel Form</title>

    <link rel="stylesheet" href="/src/govuk-frontend-4.4.1.min.css" />

</head>

<body>
    <div class="govuk-width-container ">
        <main class="govuk-main-wrapper " id="main-content" role="main">

            <!-- Errors sumaary -->
            <div class="govuk-error-summary" data-module="govuk-error-summary">
                <div role="alert">
                    <h2 class="govuk-error-summary__title">
                        There is a problem
                    </h2>
                    <div class="govuk-error-summary__body">
                        <ul class="govuk-list govuk-error-summary__list">
                            <li>
                                <a href="#">The date your passport was issued must be in the past</a>
                            </li>
                            <li>
                                <a href="#">Enter a postcode, like AA1 1AA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Errors sumaary -->

            <form action="/">

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="FamilyName">
                        Priezvisko
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Priezvisko sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--error" id="FamilyName" name="FamilyName" placeholder="Priezvisko" required>
                </div>

                <fieldset class="govuk-fieldset">
                    <legend class="govuk-fieldset__legend govuk-label--s">
                        Je Vaše priezvisko iné ako rodné?
                    </legend>
                    <div class="govuk-radios govuk-radios--inline">
                        <div class="govuk-radios__item">
                            <input type="hidden" name="booleanGivenFamilyName" value="0" />
                            <input class="govuk-radios__input" type="radio" value="0" name="booleanGivenFamilyName" required checked />
                            <label class="govuk-label govuk-radios__label" for="m">
                                Nie
                            </label>
                        </div>
                        <div class="govuk-radios__item">
                            <input type="text" class="govuk-radios__input" type="radio" name="booleanGivenFamilyName" value="1" required />
                            <label class="govuk-label govuk-radios__label" for="w">
                                Áno
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="govuk-checkboxes__conditional govuk-checkboxes__conditional--hidden">
                    <div class="govuk-form-group">
                        <label class="govuk-label govuk-label--s" for="GivenFamilyName">
                            Rodné priezvisko
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Uvedte rodné priezvisko
                        </span>
                        <input type="text" class="govuk-input govuk-input--error" id="GivenFamilyName" name="GivenFamilyName" placeholder="Rodné priezvisko" required>
                    </div>
                </div>


                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="GivenName">
                        Meno
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Meno sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--error" id="GivenName" name="GivenName" placeholder="Meno" required>
                </div>


                <div class="govuk-form-group">
                    <fieldset class="govuk-fieldset">
                        <legend class="govuk-fieldset__legend govuk-label--s">
                            Pohlavie
                        </legend>
                        <div class="govuk-radios govuk-radios--inline">
                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="Sex" id="MUZ" value="MUZ" required>
                                <label class="govuk-label govuk-radios__label" for="MUZ">
                                    Muž
                                </label>
                            </div>
                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="Sex" id="ZENA" value="ZENA" required>
                                <label class="govuk-label govuk-radios__label" for="ZENA">
                                    Žena
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="govuk-form-group govuk-input--width-10">
                    <label class="govuk-label govuk-label--s" for="IdentifierValue">
                        Rodné číslo
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Rodné číslo sa vyžaduje.
                    </span>
                    <input type="text" class="govuk-input govuk-input--error" id="IdentifierValue" name="IdentifierValue" placeholder="Rodné číslo" required>
                </div>


                <div class="govuk-form-group govuk-input--width-10">
                    <label class="govuk-label govuk-label--s" for="Nationality">
                        Štátna príslušnosť
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Štátna príslušnosť sa vyžaduje.
                    </span>
                    <input type="text" class="govuk-input govuk-input--error" id="Nationality" name="Nationality" placeholder="Štátna príslušnosť" required>
                </div>


                <div class="govuk-form-group">
                    <fieldset class="govuk-fieldset" aria-describedby="example-hint">
                        <legend class="govuk-fieldset__legend govuk-label--s">
                            Stav
                        </legend>
                        <div class="govuk-radios govuk-radios">
                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="MaritalStatus" id="1" value="1" required>
                                <label class="govuk-label govuk-radios__label" for="1">
                                    Slobodný/á
                                </label>
                            </div>

                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="MaritalStatus" id="2" value="2" required>
                                <label class="govuk-label govuk-radios__label" for="2">
                                    Vydatá/ženaty
                                </label>
                            </div>

                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="MaritalStatus" id="3" value="3" required>
                                <label class="govuk-label govuk-radios__label" for="3">
                                    Ovdovená/ý
                                </label>
                            </div>

                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="MaritalStatus" id="4" value="4" required>
                                <label class="govuk-label govuk-radios__label" for="4">
                                    Rozvedená/ý
                                </label>
                            </div>

                            <div class="govuk-radios__item">
                                <input class="govuk-radios__input" type="radio" name="MaritalStatus" id="5" value="5" required>
                                <label class="govuk-label govuk-radios__label" for="5">
                                    Odlúčená/ý
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <!-- {{-- End Personal info --}} -->


                <!-- {{-- Part Resident address --}} -->

                <legend class="govuk-fieldset__legend govuk-fieldset__legend--m">
                    Adresa trvalého pobytu
                </legend>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="StreetName">
                        Názov ulice
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Názov ulice sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--error" id="StreetName" name="StreetName" placeholder="Názov ulice" required>
                </div>


                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="BuildingNumber">
                        Orientačné číslo
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Orientačné číslo sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--error govuk-input--width-10" id="BuildingNumber" name="BuildingNumber" placeholder="Orientačné číslo" required>
                </div>


                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="PropertyRegistrationNumber">
                        Súpisné číslo
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Súpisné číslo sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--width-10 govuk-input govuk-input--error" id="PropertyRegistrationNumber" name="PropertyRegistrationNumber" placeholder="Súpisné číslo" required>
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="PostalCode">
                        PSČ
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Poštové smerovacie číslo sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input--width-10 govuk-input govuk-input--error" id="PostalCode" name="PostalCode" placeholder="Poštové smerovacie číslo" required>
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="Municipality">
                        Obec
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Obec sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input govuk-input--error" id="Municipality" name="Municipality" placeholder="Názov obce" required>
                </div>
                <!-- {{-- End Resident address --}} -->




                <!-- {{-- Part Temporary address --}} -->
                <fieldset class="govuk-fieldset">
                    <div id="changed-name-hint" class="govuk-label govuk-label--s">
                        Uviesť korenšpondenčnú adresu, na zasielanie písomnosti?
                    </div>
                    <div class="govuk-radios govuk-radios--inline" data-module="govuk-radios">
                        <div class="govuk-radios__item">
                            <input class="govuk-radios__input" name="temporary_residence" type="hidden" value="0" />
                            <input class="govuk-radios__input" id="temporary_residence-0" checked name="temporary_residence" type="radio" value="0" />
                            <label class="govuk-label govuk-radios__label" for="temporary_residence-0">
                                Nie
                            </label>
                        </div>
                        <div class="govuk-radios__item">
                            <input class="govuk-radios__input" id="temporary_residence-1" name="temporary_residence" type="radio" value="1" />
                            <label class="govuk-label govuk-radios__label" for="temporary_residence-1">
                                Áno
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="govuk-checkboxes__conditional govuk-checkboxes__conditional--hidden">

                    <legend class="govuk-fieldset__legend govuk-fieldset__legend--m">
                        Korenšpondenčná adresa
                    </legend>

                    <div class="govuk-form-group">
                        <label class="govuk-label govuk-label--s" for="temporary_StreetName">
                            Názov ulice
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Názov ulice sa vyžaduje
                        </span>
                        <input type="text" class="govuk-input govuk-input govuk-input--error" id="temporary_StreetName" name="temporary_StreetName" placeholder="Názov ulice" required>
                    </div>



                    <div class="govuk-form-group">
                        <label class="govuk-label govuk-label--s" for="temporary_BuildingNumber">
                            Orientačné číslo
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Orientačné číslo sa vyžaduje
                        </span>
                        <input class="govuk-input govuk-input--width-10 govuk-input govuk-input--error" id="temporary_BuildingNumber" name="temporary_BuildingNumber" type="text" placeholder="Popisné číslo" required>
                    </div>

                    <div class="govuk-form-group">
                        <label class="govuk-label govuk-label--s" for="temporary_PropertyRegistrationNumber">
                            Súpisné číslo
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Súpisné číslo sa vyžaduje
                        </span>
                        <input class="govuk-input govuk-input--width-10 govuk-input govuk-input--error" id="temporary_PropertyRegistrationNumber" name="temporary_PropertyRegistrationNumber" type="text" placeholder="Súpisné číslo" required>
                    </div>


                    <div class="govuk-form-group">
                        <label class="govuk-label  govuk-label--s" for="temporary_PostalCode">
                            Psč
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Psč obce sa vyžaduje
                        </span>
                        <input class="govuk-input govuk-input--width-10 govuk-input govuk-input--error" id="temporary_PostalCode" name="temporary_PostalCode" placeholder="Psč obce" required type="text" placeholder="Poštové smerovacie číslo" required>
                    </div>


                    <div class="govuk-form-group">
                        <label class="govuk-label govuk-label--s" for="temporary_Municipality">
                            Obec
                        </label>
                        <span id="input-with-error-message-error" class="govuk-error-message">
                            Obec sa vyžaduje
                        </span>
                        <input type="text" class="govuk-input govuk-input govuk-input--error" id="temporary_Municipality" name="temporary_Municipality" placeholder="Názov obce" required>
                    </div>

                </div>
                <!-- {{-- End Temporary address --}} -->


                <!-- {{-- Part Personal info II. --}} -->
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="phone_number">
                        Telefónne číslo
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Telefónne číslo sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input govuk-input--error" id="phone_number" name="phone_number" placeholder="Telefónne číslo" required>
                </div>


                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="email">
                        Email
                    </label>
                    <span id="input-with-error-message-error" class="govuk-error-message">
                        Email sa vyžaduje
                    </span>
                    <input type="text" class="govuk-input govuk-input govuk-input--error" id="email" name="email" placeholder="Email" required>
                </div>

                <!-- {{-- End Personal info II. --}} -->

            </form>
    </div>
    </main>
</body>

</html>