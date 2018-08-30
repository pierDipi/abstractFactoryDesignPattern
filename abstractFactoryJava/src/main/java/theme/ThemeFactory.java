package theme;

/**
 * This class makes the client of the theme module independent of how object are created.
 */
public abstract class ThemeFactory {

    /**
     * Create the dialog component.
     *
     * @return the dialog component of this theme.
     */
    public abstract DialogInterface createDialog();


    /**
     * Create the toolbar component.
     *
     * @return the toolbar component of this theme.
     */
    public abstract ToolbarInterface createToolbar();


    /**
     * Create the footer component.
     *
     * @return the footer component of this theme.
     */
    public abstract FooterInterface createFooter();

}
